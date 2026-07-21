import re
import os

def convert_html_to_blade(html_path, blade_path, title, page_type):
    with open(html_path, 'r', encoding='utf-8') as f:
        html = f.read()

    # Extract head content
    head_match = re.search(r'<head>(.*?)</head>', html, re.DOTALL)
    head_content = ""
    if head_match:
        head_content = head_match.group(1)
        head_content = re.sub(r'<meta charset="utf-8"/>', '', head_content)
        head_content = re.sub(r'<meta content="width=device-width, initial-scale=1.0" name="viewport"/>', '', head_content)
        head_content = re.sub(r'<title>.*?</title>', '', head_content)

    # Extract body content and body classes
    body_match = re.search(r'<body(.*?)>(.*?)</body>', html, re.DOTALL)
    body_class = ""
    body_content = ""
    if body_match:
        body_class = body_match.group(1).replace('class="', '').replace('"', '').strip()
        body_content = body_match.group(2)

    # Common replacements
    # Nav links
    body_content = re.sub(r'<a([^>]*?)>Certificates</a>', r'<a\1 href="{{ route(\'certificates.index\') }}">Certificates</a>', body_content)
    body_content = re.sub(r'<a([^>]*?)>\s*<span class="material-symbols-outlined">dashboard</span>\s*<span class="font-label-lg text-label-lg">Dashboard</span>\s*</a>', r'<a\1 href="{{ route(\'admin.dashboard\') }}">\n<span class="material-symbols-outlined">dashboard</span>\n<span class="font-label-lg text-label-lg">Dashboard</span>\n</a>', body_content)
    body_content = re.sub(r'<a([^>]*?)>\s*<span class="material-symbols-outlined"[^>]*>verified</span>\s*<span class="font-label-lg text-label-lg">Manage Certificates</span>\s*</a>', r'<a\1 href="{{ route(\'admin.certificates.index\') }}">\n<span class="material-symbols-outlined" style="font-variation-settings: \'FILL\' 1;">verified</span>\n<span class="font-label-lg text-label-lg">Manage Certificates</span>\n</a>', body_content)
    
    # In index certificates, change "Lihat" button to anchor
    if page_type == 'index':
        body_content = re.sub(
            r'<button([^>]*?)>(\s*<span class="material-symbols-outlined[^>]*>visibility</span> Lihat\s*)</button>',
            r'<a href="{{ route(\'certificates.show\', 1) }}"\1>\2</a>',
            body_content
        )

    # In show certificate, change "Kembali ke Daftar" button to anchor
    if page_type == 'show':
        body_content = re.sub(
            r'<button([^>]*?)>(\s*<span class="material-symbols-outlined[^>]*>list</span>\s*Kembali ke Daftar\s*)</button>',
            r'<a href="{{ route(\'certificates.index\') }}"\1>\2</a>',
            body_content
        )
        # Change Top Back button
        body_content = re.sub(
            r'<button([^>]*?)>(\s*<span class="material-symbols-outlined[^>]*>arrow_back</span>\s*<span>Kembali</span>\s*)</button>',
            r'<a href="{{ route(\'certificates.index\') }}"\1>\2</a>',
            body_content
        )

    # Forms csrf
    body_content = re.sub(r'(<form[^>]*>)', r'\1\n@csrf', body_content, flags=re.IGNORECASE)

    # Replace remaining href="#" intelligently where appropriate, but since we caught the main ones, we can leave the rest.

    blade_template = f"""@extends('layouts.app')
@section('title', '{title}')
@section('content')
{head_content.strip()}
<div class="{body_class}">
{body_content.strip()}
</div>
@endsection
"""
    
    os.makedirs(os.path.dirname(blade_path), exist_ok=True)
    with open(blade_path, 'w', encoding='utf-8') as f:
        f.write(blade_template)

convert_html_to_blade(
    'd:/sertivikat/sertifikat_saya_seminarku/code.html',
    'c:/Users/fadhi/Herd/worshop/resources/views/certificates/index.blade.php',
    'Sertifikat Saya',
    'index'
)

convert_html_to_blade(
    'd:/sertivikat/preview_sertifikat_seminarku/code.html',
    'c:/Users/fadhi/Herd/worshop/resources/views/certificates/show.blade.php',
    'Preview Sertifikat',
    'show'
)

convert_html_to_blade(
    'd:/sertivikat/kelola_sertifikat_admin_panel/code.html',
    'c:/Users/fadhi/Herd/worshop/resources/views/admin/certificates/index.blade.php',
    'Kelola Sertifikat Admin',
    'admin_index'
)
print("Conversion done.")
