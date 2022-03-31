const activate_settings = document.getElementById('activate_settings');
const activate_notification = document.getElementById('activate_notification');
const activate_profile = document.getElementById('activate_profile');
document.getElementById('settings').addEventListener('click',open_settings);
document.getElementById('notification_bell').addEventListener('click',open_notification);
document.getElementById('profile').addEventListener('click',open_profile);

function open_settings(){
    activate_settings.style.visibility = "visible";
}

function open_notification(){
    activate_notification.style.visibility = "visible";
}

function open_profile(){
    activate_profile.style.visibility = "visible";
}