export default async function handler(req, res) {
  const { code } = req.query;
  const client_id = process.env.GITHUB_CLIENT_ID;
  const client_secret = process.env.GITHUB_CLIENT_SECRET;

  if (!code) {
    return res.status(400).send('Chybí kód');
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
const message = 'authorization:github:success:' + JSON.stringify({ token, provider: 'github' });
if (window.opener) {
  window.opener.postMessage(message, '*');
  setTimeout(() => window.close(), 500);
} else {
  document.body.innerText = 'Hotovo, zavri toto okno.';
}
</script>
</body>
</html>`;

  res.setHeader('Content-Type', 'text/html');
  return res.send(html);
}
