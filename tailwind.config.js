/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                biru: "#7895B2",
                biru_muda: "#AEBDCA",
                cream: "#E8DFCA",
                abu_muda: "#F9F9F9",
            },
            fontFamily:{
              poor: "Poor Story",
              rale: "Raleway"
            }
        },
    },
    plugins: [],
};
