import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

const sourceDir = 'C:/Users/Rangga Mukti/Downloads/SCHOOL';
const targetDir = 'public/images/portfolio/school';
const prefix = 'alineas-school-';

(async () => {
    if (!fs.existsSync(targetDir)) {
        fs.mkdirSync(targetDir, { recursive: true });
    }

    if (!fs.existsSync(sourceDir)) {
        console.log(`Source dir not found: ${sourceDir}`);
        return;
    }

    const files = fs.readdirSync(sourceDir).filter(f => f.toLowerCase().endsWith('.jpg') || f.toLowerCase().endsWith('.jpeg'));
    
    let count = 1;

    for (const file of files) {
        const sourcePath = path.join(sourceDir, file);
        const paddedCount = String(count).padStart(3, '0');
        const targetFilename = `${prefix}${paddedCount}.webp`;
        const targetPath = path.join(targetDir, targetFilename);
        
        console.log(`Converting ${file} -> ${targetFilename}`);
        await sharp(sourcePath)
            .webp({ quality: 80 })
            .toFile(targetPath);
            
        count++;
    }
    console.log(`${targetDir} converted successfully! Added: ${count - 1} images.`);
})();
