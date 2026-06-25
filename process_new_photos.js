import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

async function processAbout() {
    const sourcePath = 'C:\\Users\\Rangga Mukti\\Downloads\\ChatGPT Image 25 Jun 2026, 02.56.14.png';
    const targetPath = path.join(process.cwd(), 'public/images/about.webp');
    
    console.log(`Processing About Image -> ${targetPath}`);
    await sharp(sourcePath)
        .resize({ width: 1200, withoutEnlargement: true })
        .webp({ quality: 60, effort: 6 })
        .toFile(targetPath);
}

async function processEvents() {
    const sourceDir = 'C:\\Users\\Rangga Mukti\\Downloads\\EVENT & COVERAGE';
    const targetDir = path.join(process.cwd(), 'public/images/portfolio/event');
    
    if (!fs.existsSync(targetDir)) {
        fs.mkdirSync(targetDir, { recursive: true });
    }

    const files = fs.readdirSync(sourceDir).filter(f => f.match(/\.(jpg|jpeg|png)$/i));
    
    let count = 1;
    for (const file of files) {
        const sourcePath = path.join(sourceDir, file);
        const targetFilename = `alineas-event-${String(count).padStart(3, '0')}.webp`;
        const targetPath = path.join(targetDir, targetFilename);
        
        console.log(`Processing ${file} -> ${targetFilename}`);
        
        await sharp(sourcePath)
            .resize({ width: 1200, withoutEnlargement: true })
            .webp({ quality: 60, effort: 6 })
            .toFile(targetPath);
            
        count++;
    }
}

async function main() {
    await processAbout();
    await processEvents();
    console.log('All done!');
}

main().catch(console.error);
