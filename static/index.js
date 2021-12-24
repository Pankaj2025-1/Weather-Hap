const btn = document.getElementById("btn");
const city = document.getElementById("text");
const city_name = document.getElementById("city_name");
const temperature = document.getElementById("temperature");
const windSpeed= document.getElementById("wind");
const humid= document.getElementById("humidity");
const press= document.getElementById("pressure");
const alert1= document.getElementById("alert");
const img11=document.getElementById("img1");
const img12=document.getElementById("img2");
const img13=document.getElementById("img3");
const img14=document.getElementById("img4");
const img15=document.getElementById("img5");
const img16=document.getElementById("img6");
img11.style.display='none';
img12.style.display='none';
img13.style.display='none';
img14.style.display='none';
img15.style.display='none';
img16.style.display='none';
alert1.style.display='none';

const getInfo = async (event) => {

    event.preventDefault();
    let cityval = city.value;
    if (cityval === "") {
        alert1.style.display='inline';
        setTimeout(() => {
            alert1.style.display='none'; 
        }, 3000);
    }
    else {

        try {
            alert1.style.display='none';
            let url = `http://api.openweathermap.org/data/2.5/weather?q=${cityval}&units=metric&appid=3174616d2e2b6e3eedf8071dee03ee42`
            const response = await fetch(url);
            const data= await response.json();
            const arrData=[data];
            temperature.innerText=arrData[0].main.temp;
            const x=arrData[0].main.temp;
            console.log(x);

            if(x<20 && x>8)
            {
                img11.style.display='inline';
                img12.style.display='none';
                img13.style.display='none';
            }
            else if(x>20){
                img12.style.display='inline';
                img11.style.display='none';
                img13.style.display='none';
            }
            else if(x<8)
            {
                img13.style.display='inline';
                img11.style.display='none';
                img12.style.display='none';
            }

            windSpeed.innerText=arrData[0].wind.speed;
            img14.style.display='inline';
            humid.innerText=arrData[0].main.humidity;
            img15.style.display='inline';
            press.innerText=arrData[0].main.pressure;
            img16.style.display='inline';


        } catch {
            alert1.style.display='inline';
            setTimeout(() => {
                alert1.style.display='none'; 
            }, 3000);
        }
    }
}
btn.addEventListener('click', getInfo)