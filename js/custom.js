
const sub = document.getElementById('sub');
const gift = document.getElementById('gift');

// Network
const mtn = document.getElementById('mtn')
const airtel = document.getElementById('airtel')
const _9mobile = document.getElementById('_9mobile')
const glo = document.getElementById('glo')
const value = document.getElementById('value')
const helper = document.getElementById('helper');
const wish = document.getElementById('wish');

function getIP(json) {
    //document.write("My public IP address is: ", json.ip);
    console.log(json.ip);
  }

sub.addEventListener('click', () => {
    window.open("https://www.youtube.com/channel/UC1PS6OzWk0C6hpgMsBVUJuQ", "", "width=600,height=300");
    gift.style.display = 'block'
    
    sub.style.display = 'none'
})  

gift.addEventListener('click', () => {
    helper.style.display = 'block';

    getIP();

    gift.style.display = 'none'
})

var user = "Kelvin";


const Network = (network) => {
    if (network == 'mtn') {
        fetch(`card.php?network=${network}`).then(e => e).then(e => e.text()).then(e => {
            value.innerHTML = e;
            wish.style.display = 'block'
        })

        value.classList.add('bg-warning')
        value.classList.add('text-dark')

        airtel.style.display = 'none'
        _9mobile.style.display = 'none'
        glo.style.display = 'none'
        gift.style.display = 'none'
        
    }
    
    if (network == 'airtel') {
        fetch(`card.php?network=${network}`).then(e => e).then(e => e.text()).then(e => {
            value.innerHTML = e;
            wish.style.display = 'block'
        })

        value.classList.add('bg-danger')
        value.classList.add('text-light')

        mtn.style.display = 'none'
        _9mobile.style.display = 'none'
        glo.style.display = 'none'
        gift.style.display = 'none'
    }

    if (network == 'glo') {
        fetch(`card.php?network=${network}`).then(e => e).then(e => e.text()).then(e => {
            value.innerHTML = e;
            wish.style.display = 'block'
        })

        value.classList.add('bg-success')
        value.classList.add('text-light')

        mtn.style.display = 'none'
        _9mobile.style.display = 'none'
        airtel.style.display = 'none'
        gift.style.display = 'none'
    }

    if (network == '_9mobile') {
        fetch(`card.php?network=${network}`).then(e => e).then(e => e.text()).then(e => {
            value.innerHTML = e;
            wish.style.display = 'block'
        })

        value.classList.add('bg-info')
        value.classList.add('text-light')

        mtn.style.display = 'none'
        glo.style.display = 'none'
        airtel.style.display = 'none'
        gift.style.display = 'none'
    }
}

// function renderYtSubscribeButton(channel) {
//     var container = document.getElementById('yt-button-container-render');
//     var options = {
//       'channel': channel,
//       'layout': 'full'
//     };
//     gapi.ytsubscribe.render(container, options);
//   }