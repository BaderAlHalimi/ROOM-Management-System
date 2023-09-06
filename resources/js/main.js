document.addEventListener('DOMContentLoaded', function() {
    [...document.getElementsByClassName('overlay')].forEach(ele => {
        ele.onclick = function() {
            document.getElementById('container').style.overflow = 'visible';
            this.style.opacity = '0';
            document.getElementById('add-deal').style.top='-100%';
            setTimeout(() => {
                this.parentNode.hidden=true;
            }, 500);
        };
    });
    [...document.querySelectorAll('button[type="button"].cancel')].forEach((ele,i) => {
        ele.onclick = function() {
            document.getElementById('container').style.overflow = 'visible';
            document.getElementsByClassName('overlay')[i].style.opacity = '0';
            document.getElementById('add-deal').style.top='-100%';
            setTimeout(() => {
                this.parentNode.parentNode.parentNode.hidden=true;
            }, 500);
        };
    });
    document.getElementById('show').onclick = function() {
        document.querySelector('section.add').hidden = false;
            document.getElementsByClassName('overlay')[0].style.opacity = '0.4';
            document.getElementById('container').style.overflow = 'hidden';
            setTimeout(() => {
                document.getElementById('add-deal').style.top='50%';
            }, 100);
        };
    document.getElementById('show-aside-links').onclick = function () {
        let sideLinks = document.querySelector('aside.links-side');
        document.body.style.overflow = 'hidden';
        sideLinks.classList.add('active');
        sideLinks.style.transitionDuration = '0.3s';
        sideLinks.classList.remove('remove');
        setTimeout(() => {
            document.body.onclick = function () {
                if(sideLinks.classList.contains('active')){
                    sideLinks.classList.add('remove')
                setTimeout(() => {
                    sideLinks.style.transitionDuration = '0s';
                    sideLinks.classList.remove('active');
                    document.body.style.overflow = 'visible';
                    document.body.onclick = false;
                }, 200);
            }
        }
        }, 100);
    }
});
