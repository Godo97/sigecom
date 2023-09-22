import Chart from "chart.js/auto";

const labels = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
];

const data = {
    labels: labels,
    datasets: [
        {
            label: "My First dataset",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            data: [0, 10, 5, 2, 20, 30, 45, 12, 50, 90],
        },
        {

        },
    ],
};

const config = {
    type: "line",
    data: data,
    options: {
        animations: {
            radius: {
                duration: 600,
                easing: "linear",
                loop: (context) => context.active,
            },
        },
        plugins: {
            tooltip: {
                enabled: false,
            },
        },
    },
};

new Chart(document.getElementById("myChart"), config);
