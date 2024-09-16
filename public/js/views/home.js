document.addEventListener('DOMContentLoaded', function(){
    var glide06 = new Glide('.glide-06', {
        type: 'slider',
        focusAt: 'center',
        perView: 1,
        autoplay: 3000,
        animationDuration: 700,
        gap: 0,
        cancelable:false,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },

    });

    glide06.mount();
});