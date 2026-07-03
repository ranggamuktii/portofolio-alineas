const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

const sources = [
    { dir: "C:\\Users\\Rangga Mukti\\Downloads\\WISUDA OUTDOOR", dest: "public/images/portfolio/graduation", prefix: "alineas-graduation-outdoor-" },
    { dir: "C:\\Users\\Rangga Mukti\\Downloads\\FASHION PRODUCT", dest: "public/images/portfolio/product", prefix: "alineas-product-" },
    { dir: "C:\\Users\\Rangga Mukti\\Downloads\\17 AGUSTUS", dest: "public/images/portfolio/group", prefix: "alineas-group-17agst-" },
    { dir: "C:\\Users\\Rangga Mukti\\Downloads\\PREWEDDING", dest: "public/images/portfolio/prewedding", prefix: "alineas-prewedding-new-" },
    { dir: "C:\\Users\\Rangga Mukti\\Downloads\\WEDDING", dest: "public/images/portfolio/wedding", prefix: "alineas-wedding-" }
];

async function processImages() {
    let outputData = {};

    for (const src of sources) {
        if (!fs.existsSync(src.dir)) {
            console.log(`Folder tidak ditemukan: ${src.dir}`);
            continue;
        }

        const destDir = path.join(__dirname, src.dest);
        if (!fs.existsSync(destDir)) {
            fs.mkdirSync(destDir, { recursive: true });
        }

        const files = fs.readdirSync(src.dir).filter(f => f.match(/\.(jpg|jpeg|png|webp)$/i));
        const fileNames = [];

        console.log(`Memproses ${files.length} foto dari ${src.dir}...`);

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const srcPath = path.join(src.dir, file);
            const fileName = `${src.prefix}${(i+1).toString().padStart(3, '0')}.webp`;
            const destPath = path.join(destDir, fileName);

            try {
                await sharp(srcPath)
                    .resize({ width: 1200, withoutEnlargement: true })
                    .webp({ quality: 80 })
                    .toFile(destPath);
                
                fileNames.push(`asset('${src.dest.replace('public/', '')}/${fileName}')`);
            } catch (err) {
                console.error(`Gagal memproses ${file}:`, err.message);
            }
        }
        
        outputData[src.prefix] = fileNames;
    }

    fs.writeFileSync('generated_portfolio.json', JSON.stringify(outputData, null, 2));
    console.log("\n✅ Semua foto berhasil dikompres dan dipindahkan ke folder public!");
    console.log("File referensi untuk codingan sudah disimpan di generated_portfolio.json");
}

processImages().catch(err => console.error(err));
