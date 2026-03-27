function toggleSidebar(){
    document.getElementById('sidebar').classList.toggle('active');
}

// Loader 5 sekund tylko przy wejściu na index.php
window.addEventListener('load', function(){
    let loader = document.getElementById('loader');
    if(loader){
        setTimeout(()=>{ loader.style.display='none'; },5000);
    }
});