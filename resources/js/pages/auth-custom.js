/**
 * Auth Page Password Toggle
 */
document.querySelectorAll('[data-password]').forEach(function(item) {
    item.addEventListener('click', function() {
        var passwordInput = item.closest('.input-group').querySelector('input');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            item.setAttribute('data-password', 'true');
            // Change icon to visible eye (since password is now shown)
            var icon = item.querySelector('iconify-icon');
            if(icon) icon.setAttribute('icon', 'solar:eye-bold-duotone');
        } else {
            passwordInput.type = 'password';
            item.setAttribute('data-password', 'false');
            // Change icon to hidden eye (since password is now hidden)
            var icon = item.querySelector('iconify-icon');
            if(icon) icon.setAttribute('icon', 'solar:eye-closed-bold');
        }
    });
});
