module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                content: "#F5F5F5",
                customOrangeLight: "#5CD35A",
                customOrangeDark: "#069304",
                customGrayColor: "#F0F0F3",
                customGrayColorDark: "#A4A4AA",
                customBlackColor: "#333333",
                'custom-gradient': 'linear-gradient(to right, #ff5733, #ffbd33)',
            },
            backgroundImage: {
                'gradient-border': 'linear-gradient(to right, #069304, #5CD35A)',
              },
            fontSize: {
                custom16: "16px", // Add your custom font size here
            },
        },
        screens: {
            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            lg: "1048px",
            // => @media (min-width: 1024px) { ... }

            xl: "1320px",
            // => @media (min-width: 1280px) { ... }

            "2xl": "1536px",
            // => @media (min-width: 1536px) { ... }
        },
    },
    plugins: [require("flowbite/plugin")],
};
