export default async function handler(req, res) {
  const { code } = req.query;
  const client_id = process.env.GITHUB_CLIENT_ID;
  const client_secret = process.env.GITHUB_CLIENT_SECRET;

  if (!code) {
    const params = new URLSearchParams({
      client_id,
      scope: 'repo,user',
      redirect_uri: 'https://vladka-web.vercel.app/api/auth',
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
<p>Pøihlašování...</p>
<script>
(function() {
  var token = ${JSON.stringify(access_token)};
  var data = JSON.stringify({ token: token, provider: "github" });
  var msg = "authorization:github:success:" + data;
  if (window.opener) {
    window.opener.postMessage(msg, "https://vladka-web.vercel.app");
    document.querySelector("p").innerText = "Hotovo! Toto okno se zavøe.";
    setTimeout(function() { window.close(); }, 2000);
  } else {
    document.querySelector("p").innerText = "Chyba: žádné opener okno.";
  }
})();
</script>
</body>
</html>`;

  res.setHeader('Content-Type', 'text/html');
  return res.send(html);
}
