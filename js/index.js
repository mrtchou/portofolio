const titreSpans = document.querySelectorAll('h1 span');
const btns = document.querySelectorAll('.btn-first');
const logo = document.querySelector('.logo');
const medias = document.querySelectorAll('.bulleSocialNetworks');
const l1 = document.querySelector('.ligne1Deco');
const l2 = document.querySelector('.ligne2Deco');

window.addEventListener('load', () => {

    const TL = gsap.timeline({ paused: true });

    TL
        .staggerFrom(titreSpans, 1, { top: -50, opacity: 0, ease: "power2.out" }, 0.3)
        .staggerFrom(btns, 5, { opacity: 0, ease: "bounce.out", y: -800 }, 0.3, '-=1')
        .from(l1, 1, { width: 0, ease: "power2.out" }, '-=2')
        .from(l2, 1, { width: 0, ease: "power2.out" }, '-=2')
        .from(logo, 0.4, { transform: "scale(0)", ease: "power2.out" }, '-=2')
        .staggerFrom(medias, 3, { left: -2000, ease: "power2.out" }, 0.3, '-=1');




    TL.play();
})


/* menu navbar media queries */
const btnRes = document.querySelector('.btn-responsive-menu');
const liste = document.querySelector('.liste-nav');
const items = document.querySelectorAll('.item')

btnRes.addEventListener('click', () => {

    btnRes.classList.toggle('active');
    liste.classList.toggle('active-menu');

})

items.forEach(item => {
    item.addEventListener('click', () => {

        btnRes.classList.toggle('active');
        liste.classList.toggle('active-menu');

    })
})







/* function pour copier un lien ou un text au click
    dans le cas present sert pour la function copier l'adresse email au click
*/
var btncopy = document.querySelector('.js-copy');
if (btncopy) {
    btncopy.addEventListener('click', docopy);
}

function docopy() {

    // Cible de l'élément qui doit être copié
    var target = this.dataset.target;
    var fromElement = document.querySelector(target);
    if (!fromElement) return;

    // Sélection des caractères concernés
    var range = document.createRange();
    var selection = window.getSelection();
    range.selectNode(fromElement);
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        // Exécution de la commande de copie
        var result = document.execCommand('copy');
        if (result) {
            // La copie a réussi
            alert('Copié !');
        }
    }
    catch (err) {
        // Une erreur est surevnue lors de la tentative de copie
        alert(err);
    }

    // Fin de l'opération
    selection = window.getSelection();
    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
}