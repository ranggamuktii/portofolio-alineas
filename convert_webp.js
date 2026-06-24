import fs from 'fs';
import path from 'path';
import sharp from 'sharp';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const directories = [
    path.join(__dirname, 'public/images/portfolio/exclusive'),
    path.join(__dirname, 'public/images/portfolio/group')
];

async function convertToWebP(dir) {
    if (!fs.existsSync(dir)) return;
    const files = fs.readdirSync(dir);
    for (const file of files) {
        const fullPath = path.join(dir, file);
        if (fs.statSync(fullPath).isDirectory()) {
            await convertToWebP(fullPath);
        } else if (file.match(/\.(jpg|jpeg|png)$/i)) {
            const webpPath = fullPath.replace(/\.(jpg|jpeg|png)$/i, '.webp');
            try {
                await sharp(fullPath)
                    .webp({ quality: 80 })
                    .toFile(webpPath);
                console.log(`Converted: ${fullPath} -> ${webpPath}`);
                // Delete original file
                fs.unlinkSync(fullPath);
                console.log(`Deleted original: ${fullPath}`);
            } catch (err) {
                console.error(`Error processing ${fullPath}:`, err);
            }
        }
    }
}

async function run() {
    for (const dir of directories) {
        await convertToWebP(dir);
    }
    console.log('Images converted to WebP successfully!');
}

run();
