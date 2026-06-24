import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const viewPath = path.join(__dirname, 'resources/views/welcome.blade.php');
let content = fs.readFileSync(viewPath, 'utf8');

const regex = /asset\('images\/portfolio\/([^\/]+)\/([^']+)'\)/g;

let mapCount = {};
let fileMap = {}; 

const newContent = content.replace(regex, (fullMatch, category, filename) => {
    const oldRelativePath = `images/portfolio/${category}/${filename}`;
    const oldAbsolutePath = path.join(__dirname, `public/${oldRelativePath}`);
    
    if (fileMap[oldAbsolutePath]) {
        return `asset('${fileMap[oldAbsolutePath]}')`;
    }
    
    if (!mapCount[category]) mapCount[category] = 1;
    
    if (fs.existsSync(oldAbsolutePath)) {
        const ext = path.extname(filename);
        const newFilename = `alineas-${category}-${String(mapCount[category]).padStart(3, '0')}${ext}`;
        const newRelativePath = `images/portfolio/${category}/${newFilename}`;
        const newAbsolutePath = path.join(__dirname, `public/${newRelativePath}`);
        
        fs.renameSync(oldAbsolutePath, newAbsolutePath);
        mapCount[category]++;
        
        fileMap[oldAbsolutePath] = newRelativePath;
        return `asset('${newRelativePath}')`;
    } else {
        console.warn('File not found: ' + oldAbsolutePath);
        return fullMatch;
    }
});

fs.writeFileSync(viewPath, newContent, 'utf8');
console.log('Renamed files and updated welcome.blade.php successfully!');
