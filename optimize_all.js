import fs from 'fs';
import path from 'path';
import sharp from 'sharp';

const portfolioDir = 'public/images/portfolio';

async function optimizeImages() {
    const categories = fs.readdirSync(portfolioDir).filter(f => fs.statSync(path.join(portfolioDir, f)).isDirectory());
    
    let totalOriginalSize = 0;
    let totalNewSize = 0;
    
    for (const cat of categories) {
        const catDir = path.join(portfolioDir, cat);
        const files = fs.readdirSync(catDir).filter(f => f.endsWith('.webp') && !f.startsWith('temp-'));
        
        for (const file of files) {
            const filePath = path.join(catDir, file);
            
            try {
                const buffer = fs.readFileSync(filePath);
                totalOriginalSize += buffer.length;
                
                // If it's already small enough (e.g., under 150KB), we might skip, but let's just optimize all to be sure.
                const newBuffer = await sharp(buffer)
                    .resize({ width: 1200, withoutEnlargement: true })
                    .webp({ quality: 60, effort: 6 })
                    .toBuffer();
                    
                fs.writeFileSync(filePath, newBuffer);
                
                totalNewSize += newBuffer.length;
                console.log(`Optimized ${cat}/${file}: ${(buffer.length/1024).toFixed(0)}KB -> ${(newBuffer.length/1024).toFixed(0)}KB`);
            } catch (err) {
                console.error(`Error processing ${filePath}:`, err);
            }
        }
    }
    
    console.log(`\nOptimization Complete!`);
    console.log(`Original Total: ${(totalOriginalSize / 1024 / 1024).toFixed(2)} MB`);
    console.log(`New Total: ${(totalNewSize / 1024 / 1024).toFixed(2)} MB`);
}

optimizeImages();
