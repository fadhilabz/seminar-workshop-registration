import os

files = [
    'c:/Users/fadhi/Herd/worshop/resources/views/certificates/index.blade.php',
    'c:/Users/fadhi/Herd/worshop/resources/views/certificates/show.blade.php',
    'c:/Users/fadhi/Herd/worshop/resources/views/admin/certificates/index.blade.php'
]

for file in files:
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    content = content.replace('href="#" href=', 'href=')
    
    with open(file, 'w', encoding='utf-8') as f:
        f.write(content)
print('Fixed double hrefs.')
