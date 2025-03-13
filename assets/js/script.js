document.addEventListener("DOMContentLoaded",
    function (event) {

        var isAds = getCookie('ads')
        if (!isAds) {
            var ads = document.getElementsByClassName('ads')[0]
            ads.style.display = 'block'

            ads.addEventListener('click', function () {
                setCookie('ads', true, 7)
                ads.style.display = 'none'
            })
        }

        var isCook = getCookie('cook')
        if (!isCook) {
            var cook = document.getElementsByClassName('cook')[0]
            cook.style.display = 'block'

            cook.addEventListener('click', function () {
                setCookie('ads', null, null)
                cook.style.display = 'none'
            })
        }


    }
);