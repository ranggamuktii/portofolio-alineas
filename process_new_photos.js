import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

const targets = [
    { sourceDir: 'C:/Users/Rangga Mukti/Downloads/MATERNITY', targetDir: 'public/images/portfolio/maternity', prefix: 'alineas-maternity-' },
    { sourceDir: 'C:/Users/Rangga Mukti/Downloads/GOES TO KUA', targetDir: 'public/images/portfolio/goestokua', prefix: 'alineas-goestokua-' }
];

(async () => {
    for (const target of targets) {
        if (!fs.existsSync(target.targetDir)) {
            fs.mkdirSync(target.targetDir, { recursive: true });
        }

        if (!fs.existsSync(target.sourceDir)) {
            console.log(`Source dir not found: ${target.sourceDir}`);
            continue;
        }

        const files = fs.readdirSync(target.sourceDir).filter(f => f.toLowerCase().endsWith('.jpg') || f.toLowerCase().endsWith('.jpeg'));
        let count = 1;

        for (const file of files) {
            const sourcePath = path.join(target.sourceDir, file);
            const paddedCount = String(count).padStart(3, '0');
            const targetFilename = `${target.prefix}${paddedCount}.webp`;
            const targetPath = path.join(target.targetDir, targetFilename);
            
            console.log(`Converting ${file} -> ${targetFilename}`);
            await sharp(sourcePath)
                .webp({ quality: 80 })
                .toFile(targetPath);
                
            count++;
        }
        console.log(`${target.targetDir} converted successfully! Total: ${count - 1} images.`);
    }
})();
