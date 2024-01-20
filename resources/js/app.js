import "./bootstrap";
import "../css/app.css";

const toastElList = document.querySelectorAll(".toast");
[...toastElList].map((toastEl) => {
    const toast = new bootstrap.Toast(toastEl);
    toast.show();
});
