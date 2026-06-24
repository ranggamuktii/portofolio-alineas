import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

const sourceDir = 'C:/Users/Rangga Mukti/Downloads/PHOTOBOOTH';
const targetDir = 'public/images/portfolio/photobooth';

if (!fs.existsSync(targetDir)) {
    fs.mkdirSync(targetDir, { recursive: true });
}

const files = fs.readdirSync(sourceDir).filter(f => f.toLowerCase().endsWith('.jpg') || f.toLowerCase().endsWith('.jpeg'));
let count = 1;

(async () => {
    for (const file of files) {
        const sourcePath = path.join(sourceDir, file);
        const paddedCount = String(count).padStart(3, '0');
        const targetFilename = `alineas-photobooth-${paddedCount}.webp`;
        const targetPath = path.join(targetDir, targetFilename);
        
        console.log(`Converting ${file} -> ${targetFilename}`);
        await sharp(sourcePath)
            .webp({ quality: 80 })
            .toFile(targetPath);
            
        count++;
    }
    console.log('Photobooth images converted successfully!');
})();
