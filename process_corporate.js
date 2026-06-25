import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

const sourceDir = 'C:\\Users\\Rangga Mukti\\Downloads\\Corporate Profile';
const targetDir = path.join(process.cwd(), 'public/images/portfolio/corporate');

if (!fs.existsSync(targetDir)) {
    fs.mkdirSync(targetDir, { recursive: true });
}

async function processImages() {
    const files = fs.readdirSync(sourceDir).filter(f => f.match(/\.(jpg|jpeg|png)$/i));
    
    let count = 1;
    for (const file of files) {
        const sourcePath = path.join(sourceDir, file);
        const targetFilename = `alineas-corporate-${String(count).padStart(3, '0')}.webp`;
        const targetPath = path.join(targetDir, targetFilename);
        
        console.log(`Processing ${file} -> ${targetFilename}`);
        
        await sharp(sourcePath)
            .resize({ width: 1200, withoutEnlargement: true })
            .webp({ quality: 60, effort: 6 })
            .toFile(targetPath);
            
        count++;
    }
    
    console.log(`Successfully processed ${count - 1} corporate photos.`);
}

processImages().catch(console.error);
