
window.onload=generateGallery;

var actualGalleryPage=1;
function generateGallery(){
    var i=0;
    var ncolumnas=4;
    var nfilas=4;
    var totalElements=ncolumnas*nfilas;
    var gallery=new Array(30);
    var figure, img, p;
    for(var j=0; j<gallery.length; j++){
        gallery[j] = "imagen" + j;
    }
    while(i<gallery.length) {
        for (i; i < gallery.length || i < actualGalleryPage * totalElements; i++) {
            figure = document.createElement('figure');
            figure.setAttribute('class','gallery__item');
            img = document.createElement('img');
            img.setAttribute('alt', 'img'+i);
            img.className="gallery_img";
            p = document.createElement('p');
            p.setAttribute('class', 'img__description');
            p.textContent = "hola imagen numero "+i;
            figure.appendChild(img);
            figure.appendChild(p);
            document.getElementById('section_gallery').appendChild(figure);
        }
        actualGalleryPage++;

    }
}
/*
<figure class="gallery__item">
    <img  alt="img1" class="gallery__img">
    <p class="img__description">lo lolololo lo</p>
</figure>
 */
