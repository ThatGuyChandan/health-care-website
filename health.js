function changeBg(){
    const section=document.getElementById('bg1');
    const images=['url("images/h1.jpg")','url("images/h2.jpg")','url("images/h3.jpg")','url("images/h4.jpg")'];
    const bg=images[Math.floor(Math.random()*images.length)];
    section.style.backgroundImage=bg;
}
    setInterval(changeBg,2000);
