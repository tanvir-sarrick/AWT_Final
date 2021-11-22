import React from 'react';
import ReactDOM from 'react-dom';
import './assets/vendor/bootstrap/css/bootstrap.min.css';
import './assets/vendor/bootstrap-icons/bootstrap-icons.css';
import './assets/vendor/boxicons/css/boxicons.min.css';
import './assets/vendor/glightbox/css/glightbox.min.css';
import './assets/vendor/swiper/swiper-bundle.min.css';
import './assets/css/style.css';
import reportWebVitals from './reportWebVitals';
import Header from './Components/Header';
import Banner from './Components/Banner';
import Main from './Components/Main';
import Clients from './Components/Clients';
import About from './Components/About';
import Counts from './Components/Counts';
import Service from './Components/Services/Service';

ReactDOM.render(
  <React.StrictMode>
    <Header/>
    <Banner/>
    <Main/>
    <Clients/>
    <About/>
    <Counts/>
    <Service/>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
