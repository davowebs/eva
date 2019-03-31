
let savings = document.getElementById("savings");

let shifts = document.getElementById("shifts");
let days = document.getElementById("days");
let weeks = document.getElementById("weeks");
let wage = document.getElementById("wage");
let shifts_current = document.getElementById("shifts_current");
let hours_current = document.getElementById("hours_current");

let shifts_label = document.getElementById("shifts_label");
let days_label = document.getElementById("days_label");
let weeks_label = document.getElementById("weeks_label");
let wage_label = document.getElementById("wage_label");
let shifts_current_label = document.getElementById("shifts_current_label");
let hours_current_label = document.getElementById("hours_current_label");

shifts.oninput = function() {
    shifts_label.innerHTML = this.value;
}
days.oninput = function() {
    days_label.innerHTML = this.value;
}
weeks.oninput = function() {
    weeks_label.innerHTML = this.value;
}
wage.oninput = function() {
    wage_label.innerHTML = this.value;
}
shifts_current.oninput = function() {
    shifts_current_label.innerHTML = this.value;
}
hours_current.oninput = function() {
    hours_current_label.innerHTML = this.value;
}

let eva_hours = shifts_label.innerHTML;

function calculate() {
    const eva = 5990; // Initial cost of Eva

    let human_hours = shifts.value * days.value * weeks.value; 
    let eva_hours = shifts_current.value * hours_current.value * weeks.value; 

    let human_wage = wage.value; // Per hour
    let eva_wage = eva / human_hours; // Per hour

    let eva_cost = eva / human_hours; // Eva cost per hour
    
    let human_savings = human_hours - eva_hours * human_wage;;
    let eva_savings = human_hours - eva_hours * eva_wage;

    let savings_total = eva_savings - human_savings;

    $('#overlay').show();
    $('#loading').show();

    setTimeout(() => {
        $('#overlay').hide();
        $('#loading').hide();
    }, 1000);

    setTimeout(() => {
        savings.innerHTML = savings_total.toFixed();
        $('#savings').fadeOut(250).fadeIn(250);
    }, 2000);
}