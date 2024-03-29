import compress_images from "compress-images";

const INPUT_path_to_your_images =
    "./assets/images/**/*.{jpg,JPG,jpeg,JPEG,png,svg,gif}";
const OUTPUT_path = "./dist/images/";

compress_images(
    INPUT_path_to_your_images,
    OUTPUT_path,
    {
        compress_force: false,
        statistic: true,
        autoupdate: true,
    },
    false,
    {
        jpg: {
            engine: "mozjpeg",
            command: ["-quality", "80"],
        },
    },
    {
        png: {
            engine: "pngquant",
            command: ["--quality=80-100", "-o"],
        },
    },
    {
        svg: {
            engine: "svgo",
            command: "--multipass",
        },
    },
    {
        gif: {
            engine: "gifsicle",
            command: ["--colors", "64", "--use-col=web"],
        },
    },
    function () {}
);
