const larges = document.querySelectorAll(".choose-large");
const parks = document.querySelectorAll(".choose-park");
const times = document.querySelectorAll(".time");
const targetDate = document.querySelector("#target-date");
const btn = document.querySelector(".hamburger");
const nav = document.querySelector("nav");
const wrapperDates = document.querySelector(".dates");

for (let i = 1; i <= 34; i++) {
    const div = document.createElement("div");
    const h4 = document.createElement("h4");
    if (i <= 3) {
        h4.textContent = "1";
        div.classList.add("hidden");
    } else {
        h4.textContent = i - 3;
        if (i === 11) {
            div.classList.add("active");
        }
        div.addEventListener("click", () => {
            removeClassOfDates();
            div.classList.add("active");
            const h4Tag = div.childNodes;
            const text = h4Tag[0].innerHTML;
            targetDate.innerHTML = text;
        });
    }
    div.appendChild(h4);
    wrapperDates.appendChild(div);
}

const dates = document.querySelectorAll(".dates div");

const removeClassOfDates = () => {
    dates.forEach((ele) => {
        ele.classList.remove("active");
    });
};

const removeClassOfLarge = () => {
    larges.forEach((ele) => {
        ele.classList.remove("active");
    });
};

const removeClassOfParks = () => {
    parks.forEach((ele) => {
        ele.classList.remove("active");
    });
};

const removeClassOfTimes = () => {
    times.forEach((ele) => {
        ele.classList.remove("active");
    });
};

larges.forEach((element) => {
    element.addEventListener("click", () => {
        removeClassOfLarge();
        element.classList.add("active");
    });
});

parks.forEach((element) => {
    element.addEventListener("click", () => {
        removeClassOfParks();
        element.classList.add("active");
    });
});

times.forEach((element) => {
    element.addEventListener("click", () => {
        removeClassOfTimes();
        element.classList.add("active");
    });
});

btn.addEventListener("click", () => {
    nav.classList.toggle("active");
    const ul = nav.children[0];
    ul.classList.toggle("active");
});
