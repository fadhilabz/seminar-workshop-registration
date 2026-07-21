import os
import re

mappings = [
    {
        'src': 'd:/crud-registration/stitch_seminar_landing_page/pendaftaran_acara_seminarku/code.html',
        'dest': 'c:/Users/fadhi/Herd/worshop/resources/views/registrations/create.blade.php',
        'title': 'Daftar Acara - SeminarKu'
    },
    {
        'src': 'd:/crud-registration/stitch_seminar_landing_page/riwayat_pendaftaran_seminarku/code.html',
        'dest': 'c:/Users/fadhi/Herd/worshop/resources/views/registrations/index.blade.php',
        'title': 'Riwayat Pendaftaran Saya - SeminarKu'
    },
    {
        'src': 'd:/crud-registration/stitch_seminar_landing_page/verifikasi_pembayaran_admin_panel/code.html',
        'dest': 'c:/Users/fadhi/Herd/worshop/resources/views/admin/payments/index.blade.php',
        'title': 'Verifikasi Pembayaran | SeminarKu Admin'
    },
    {
        'src': 'd:/crud-registration/stitch_seminar_landing_page/detail_pendaftaran_seminarku/code.html',
        'dest': 'c:/Users/fadhi/Herd/worshop/resources/views/admin/payments/show.blade.php',
        'title': 'Detail Pendaftaran - SeminarKu'
    }
]

for m in mappings:
    try:
        with open(m['src'], 'r', encoding='utf-8') as f:
            content = f.read()
    except Exception as e:
        print(f"Error reading {m['src']}: {e}")
        continue

    # Extract head styles/scripts
    head_content = ''
    script_tw = re.search(r'(<script src=\"https://cdn.tailwindcss.com.*?</script>)', content, re.DOTALL)
    if script_tw: head_content += script_tw.group(1) + '\n'
    
    fonts = re.findall(r'(<link href=\"https://fonts.googleapis.com.*?>)', content)
    for font in fonts: head_content += font + '\n'
        
    config = re.search(r'(<script id=\"tailwind-config\">.*?</script>)', content, re.DOTALL)
    if config: head_content += config.group(1) + '\n'
        
    style = re.search(r'(<style>.*?</style>)', content, re.DOTALL)
    if style: head_content += style.group(1) + '\n'

    # Extract body content
    body_match = re.search(r'<body[^>]*>(.*?)</body>', content, re.DOTALL)
    if body_match:
        body_content = body_match.group(1)
    else:
        body_content = content

    # Replace specific hardcoded URLs
    # / -> {{ route('home') }}
    # /acara -> {{ route('events.index') }}
    # /dashboard -> {{ route('dashboard') }}
    # /registrasi -> {{ route('registrations.index') }}
    # /admin/dashboard -> {{ route('admin.dashboard') }}
    # /admin/payments -> {{ route('admin.payments.index') }}
    
    # In these templates, links often use href="#" followed by link text like "Home" or "Acara"
    # To be safer and follow the user's instructions exactly, we'll replace the href based on context if we can.
    # Alternatively, just replace any literal `href="/"` or similar.
    # But since they are `href="#"`, I'll map the text.
    body_content = re.sub(r'href="#"([^>]*>\s*Home\s*</a>)', r'href="{{ route(\'home\') }}"\1', body_content)
    body_content = re.sub(r'href="#"([^>]*>\s*Acara\s*</a>)', r'href="{{ route(\'events.index\') }}"\1', body_content)
    # Generic replacement based on exact string if they did exist:
    body_content = body_content.replace('href="/"', 'href="{{ route(\'home\') }}"')
    body_content = body_content.replace('href="/acara"', 'href="{{ route(\'events.index\') }}"')
    body_content = body_content.replace('href="/dashboard"', 'href="{{ route(\'dashboard\') }}"')
    body_content = body_content.replace('href="/registrasi"', 'href="{{ route(\'registrations.index\') }}"')
    body_content = body_content.replace('href="/admin/dashboard"', 'href="{{ route(\'admin.dashboard\') }}"')
    body_content = body_content.replace('href="/admin/payments"', 'href="{{ route(\'admin.payments.index\') }}"')

    # Add @csrf to all forms
    body_content = re.sub(r'(<form[^>]*>)', r'\1\n    @csrf', body_content)
    
    # Assuming update and delete forms have something in their action or id
    # Since these are landing pages, we might not have explicit PUT/DELETE, but we'll try to add them if they look like it.
    
    # Construct final content
    final_content = f"""@extends('layouts.app')

@section('title', '{m['title']}')

@section('content')
{head_content}
{body_content}
@endsection
"""

    os.makedirs(os.path.dirname(m['dest']), exist_ok=True)
    with open(m['dest'], 'w', encoding='utf-8') as f:
        f.write(final_content)
    print(f"Created {m['dest']}")
