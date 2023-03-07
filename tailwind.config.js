/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    container: {
        padding: "1rem",
    },
    theme: {
        mode: 'jit',
        extend: {
            fontFamily: {
                orbitron: ['orbitron', 'sans-serif'],
            },
            spacing: {
                68: "16.5rem",
            },
            width: {
                '120': '28rem',
            },
            colors: {
                "gray-github": "#161b22",
                "dark-hub": "#0d1117",
                "git-blue": "#58a6ff",
                "bgray": "#21262d",
                "bgray2": "#2E333C",
                "select-orange": "#f78166",
                "git-green": "#238636",
                "git-green-2": "#26953C",
            },
            variants: {
                extend: {
                    backgroundColor: ['group-hover'],
                    borderColor: ['group-hover'],
                    textColor: ['group-hover'],
                    divideColor: ['group-hover', 'hover'],
                }
            },
        },
    },
    plugins: [],
}
