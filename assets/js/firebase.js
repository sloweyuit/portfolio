// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyBZAD2Bl0cmmvWz2r2t3nkQ8d-V6r_z2dQ",
    authDomain: "slowey-portfolio.firebaseapp.com",
    projectId: "slowey-portfolio",
    storageBucket: "slowey-portfolio.appspot.com",
    messagingSenderId: "600675047688",
    appId: "1:600675047688:web:261aab7ff837ae94b574bd",
    measurementId: "G-PF8W8XCY90"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);