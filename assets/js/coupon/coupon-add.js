// 取得隨機代碼
let coding = document.getElementById("coding");
let btnRandom = document.getElementById("btnRandom");

function random10(num) {
    const condition = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    let result = "";
    for (let i = 0; i < num; i++) {
        result += condition.charAt(
            Math.floor(Math.random() * condition.length)
        );
    }
    return result;
}
btnRandom.addEventListener("click", function () {
    coding.value = random10(10);
});

// 得到優惠選擇的選項的變數
var percent = document.getElementById("percent");
var price = document.getElementById("price");
var percentDetail = document.getElementById("percent-detail");
var priceDetail = document.getElementById("price-detail");
var priceDetailValid = document.getElementById("price-detail-invalid");

priceDetail.style.display = "none";
priceDetailValid.style.display = "none";
priceDetail.value = 0.9;

// 金額與%數detail切換
percent.addEventListener("change", function () {
    if (percent.checked) {
        percentDetail.style.display = "block";
        priceDetail.style.display = "none";
    }
});
percentDetail.addEventListener("change", function () {
    priceDetail.value = percentDetail.value;
});
price.addEventListener("change", function () {
    if (price.checked) {
        percentDetail.style.display = "none";
        priceDetail.style.display = "block";
    }
});

// 當選擇金額折扣，僅能輸入整數
priceDetail.addEventListener("input", function () {
    priceDetail.value = Math.floor(priceDetail.value);
});

//開始結束日期驗證
var timeStart = document.getElementById("timeStart");
var timeEnd = document.getElementById("timeEnd");
timeStart.addEventListener("change", function () {
    timeEnd.setAttribute("min", timeStart.value);
});

//結束日期小於今日時間驗證
var now = new Date();
var canUse = document.getElementById("canUse");
var cantUse = document.getElementById("cantUse");
timeEnd.addEventListener("change", function () {
    var selectTime = new Date(timeEnd.value);
    if (selectTime < now) {
        canUse.setAttribute("disabled", "disabled");
        cantUse.setAttribute("checked", "true");
    } else {
        canUse.removeAttribute("disabled");
    }
});

// 表單驗證
(() => {
    "use strict";
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll(".needs-validation");
    // Loop over them and prevent submission
    Array.from(forms).forEach((form) => {
        form.addEventListener(
            "submit",
            (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            },
            false
        );
    });
})();
