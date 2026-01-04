// Enable syntax highlighting for code examples
hljs.highlightAll();

// Copy code handler
document.querySelectorAll('.copy-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const code = btn.nextElementSibling.innerText;
        navigator.clipboard.writeText(code).then(() => {
            btn.innerText = 'Copied!';
            setTimeout(() => btn.innerHTML = '<i class="bi bi-copy"></i>', 1500);
        });
    });
});

// Sidebar sections expand/collapse
// document.querySelectorAll('.nav-toggle').forEach(toggle => {
//     toggle.addEventListener('click', () => {
//         const sub = toggle.nextElementSibling;
//         sub.style.display = sub.style.display === 'block' ? 'none' : 'block';
//     });
// });

// Version selector handler
document.getElementById('version').addEventListener('change', function() {
    // only 0.1.x is available currently
});
