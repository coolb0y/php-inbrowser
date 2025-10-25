# php-inbrowser

Run **PHP directly inside your web browser** — no server, no backend required. 🧠⚡  
This project uses **WebAssembly (WASM)** and JavaScript to execute PHP code completely **offline** in the browser.

---

## 🚀 Overview

`php-inbrowser` enables client-side execution of PHP by embedding a WebAssembly build of the PHP runtime.  
It works seamlessly in modern browsers and supports query parameters, redirection, and basic PHP I/O.

✅ **No backend required** — everything runs in your browser  
✅ **Supports GET parameters and redirects**  
✅ **Offline-ready** (no network dependency)  
✅ **Ideal for demos, learning, or local sandboxing**  

---

## 📁 Repository Structure

php-inbrowser/
├── index.html # Main entry point
├── index2.html # Secondary demo page
├── PhpBase.mjs # Core runtime and initialization
├── PhpWeb.mjs # Browser bridge for PHP execution
├── php-web.mjs # WebAssembly loader and wrapper
├── php-web.mjs.wasm # Compiled PHP runtime in WebAssembly
├── php-tags.jsdelivr.mjs # JSDelivr CDN wrapper (for online version)
├── html head script async-working.old.html # Async script test page
├── test.php # Sample PHP file (runs in browser)
└── folder1/ # Example directory for redirection and params


---

## 💡 How It Works

1. **WebAssembly (WASM)** is used to compile the PHP runtime.  
2. **JavaScript (ES Modules)** loads and initializes the PHP interpreter inside the browser.  
3. The page captures PHP script input (either inline or fetched) and executes it on the client-side.  
4. Results are rendered dynamically without requiring a backend server.

---

## 🧩 Example Usage

### 1. Open `index.html`
Simply open the file in a browser — **no server required**.

```bash
# Local file example
file:///path/to/php-inbrowser/index.html

2. Try Running PHP

The page includes a PHP snippet like this:

<?php
echo "Hello from PHP running inside your browser!";
?>

The output appears instantly — just like a real PHP environment.
3. Passing Query Parameters

You can pass parameters via the URL:

index.html?name=Ankur&lang=php

Inside PHP, they are accessible via $_GET:

<?php
echo "Hello " . $_GET['name'] . "! You selected " . $_GET['lang'];
?>

🔁 Redirection Support

Redirection using PHP headers is also supported (via simulated in-browser routing):

<?php
header("Location: folder1/index.html?msg=redirected");
exit();
?>

The page correctly handles query parameters after redirection.
🧱 Technical Details
Component	Description
Runtime	PHP compiled to WebAssembly
Modules	ES6 Modules (.mjs) for runtime bridging
Offline Support	Fully functional without any server
Browser Compatibility	Chrome, Firefox, Edge, Safari (latest versions)
Redirection & Params	Supported via JS-level intercept
🧰 Development Notes

You can modify and rebuild the WASM runtime if you wish to change PHP version or configuration.

Example build idea:

emconfigure ./configure --enable-cli --disable-all
emmake make -j$(nproc)

(This step is optional — current WASM runtime is already included.)
📜 License

This project uses PHP runtime under the PHP License and JavaScript glue code under the MIT License.
Refer to https://www.php.net/license/

for details.
👨‍💻 Author

Ankur Narayan Singh (coolb0y)
Created for running PHP scripts directly inside browsers using WebAssembly and ES Modules.

If you like this project, consider ⭐ starring it on GitHub or contributing with bug fixes and enhancements.
🙏 Acknowledgments

    PHP

— the original language and runtime

Emscripten

— for WebAssembly compilation

JSDelivr

— for optional CDN support

All contributors to browser-based PHP execution projects
