const title_el = document.querySelector("title");

const admin = document.URL.indexOf("index") >= 0;
const dashboard = document.URL.indexOf("dashboard") >= 0;
const contestants_page = document.URL.indexOf("contestants") >= 0;
const verify_payment = document.URL.indexOf("verify-payment") >= 0;
const online_voters = document.URL.indexOf("online-voters") >= 0;
const talk_to_me = document.URL.indexOf("contact") >= 0;

const dashboard_nav = document.querySelector("ul li.dashboard");
const contestants_nav = document.querySelector('ul li.contestants');
const verify_payment_nav = document.querySelector('ul li.verify');
const online_voters_nav = document.querySelector('ul li.online_voters');
const talk_to_me = document.querySelector('ul li.contact');

if(dashboard || admin){
    title_el.innerHTML = "Dashboard :: Vote Online&trade;";
    dashboard_nav.classList.add('active');
}
if(contestants_page){
    title_el.innerHTML = "Contestants :: Vote Online&trade;";
    contestants_nav.classList.add('active');
}
if(verify_payment){
    title_el.innerHTML = "Verify Transfers :: Vote Online&trade;";
    verify_payment_nav.classList.add('active');
}
if(talk_to_me  || contact){
    title_el.innerHTML = "Voters :: Vote Online&trade;";
    talk_to_me.classList.add('active');
}