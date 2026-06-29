export default async function handler(req, res) {
  const { code } = req.query;
  const client_id = process.env.GITHUB_CLIENT_ID;
  const client_secret = process.env.GITHUB_CLIENT_SECRET;

  if (!code) {
    const params = new URLSearchParams({
      client_id,
      scope: 'repo,user',
    });
    return res.redirect(`https://github.com/login/oauth/authorize?${params}`);
  }

  const tokenRes = await fetch('https://github.com/login/oauth/access_token', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
    body: JSON.stringify({ client_id, client_secret, code }),
  });

  const { access_token, error } = await tokenRes.json();

  if (error || !access_token) {
    return res.status(400).send(`OAuth error: ${error}`);
  }

  const html = `<!DOCTYPE html>
<html>
<body>
<script>
const token = ${JSON.stringify(access_token)};
const message = JSON.stringify({
  token,
  provider: 'github'
});
if (window.opener) {
  window.opener.postMessage('authorization:github:success:' + message, '*');
  setTimeout(() => window.close(), 1000);
} else {
  document.body.innerText = 'Pøihlášení probìhlo, zavøi toto okno.';
}
</script>
</body>
</html>`;

  res.setHeader('Content-Type', 'text/html');
  return res.send(html);
}
