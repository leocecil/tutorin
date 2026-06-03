<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>@yield('title', 'Tutorin')</title>
    </head>
<body>
    </body>
</html>

@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/student/massage.css') }}">
@endpush

@section('content')
<div class="messages-container">
    
    <div class="chat-sidebar">
        <div class="sidebar-header">
            <h1>Messages</h1>
            <p>Discuss your learning materials</p>
        </div>
        
        <div class="chat-list">
            <div class="chat-item active" onclick="loadConversation('Dian Ramadhani', 'Mathematics', 'online', 'DR')">
                <div class="avatar-wrapper">
                    <div class="tutor-avatar-circle" style="background: #ffedd5; color: #9a3412;">DR</div>
                    <div class="status-indicator online"></div>
                </div>
                <div class="chat-item-info">
                    <div class="chat-item-header">
                        <h4>Dian Ramadhani</h4>
                        <span class="chat-time">10:42 AM</span>
                    </div>
                    <div class="chat-item-preview">
                        <p>Sure, you can send the question code here...</p>
                        <span class="unread-badge">1</span>
                    </div>
                </div>
            </div>

            <div class="chat-item" onclick="loadConversation('Arief Santoso', 'Physics', 'offline', 'AS')">
                <div class="avatar-wrapper">
                    <div class="tutor-avatar-circle" style="background: #e0f2fe; color: #0369a1;">AS</div>
                    <div class="status-indicator"></div>
                </div>
                <div class="chat-item-info">
                    <div class="chat-item-header">
                        <h4>Arief Santoso</h4>
                        <span class="chat-time">Yesterday</span>
                    </div>
                    <div class="chat-item-preview">
                        <p>Don't forget to review the PDF file tomorrow.</p>
                    </div>
                </div>
            </div>

            <div class="chat-item" onclick="loadConversation('Siti Nurhaliza', 'Economics', 'online', 'SN')">
                <div class="avatar-wrapper">
                    <div class="tutor-avatar-circle" style="background: #dcfce7; color: #15803d;">SN</div>
                    <div class="status-indicator online"></div>
                </div>
                <div class="chat-item-info">
                    <div class="chat-item-header">
                        <h4>Siti Nurhaliza</h4>
                        <span class="chat-time">2 days ago</span>
                    </div>
                    <div class="chat-item-preview">
                        <p>Our class is confirmed for Wednesday.</p>
                    </div>
                </div>
            </div>

            <div class="chat-item" onclick="loadConversation('Budi Utomo', 'Computer Science', 'offline', 'BU')">
                <div class="avatar-wrapper">
                    <div class="tutor-avatar-circle" style="background: #f3e8ff; color: #6b21a8;">BU</div>
                    <div class="status-indicator"></div>
                </div>
                <div class="chat-item-info">
                    <div class="chat-item-header">
                        <h4>Budi Utomo</h4>
                        <span class="chat-time">1w ago</span>
                    </div>
                    <div class="chat-item-preview">
                        <p>Great project submission! Keep it up.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="chat-main">
        <div class="chat-main-header">
            <div style="display: flex; align-items: center; gap: 12px;">
                <div class="tutor-avatar-circle" id="activeChatInitials" style="background: #ffedd5; color: #9a3412; width: 40px; height: 40px; font-size: 13px;">DR</div>
                <div class="active-user-details">
                    <h3 id="activeChatName">Dian Ramadhani</h3>
                    <p id="activeChatStatus">Active • Mathematics</p>
                </div>
            </div>
            <div>
                <button class="btn-options">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                </button>
            </div>
        </div>

        <div class="chat-conversation-area" id="conversationBox">
            <div class="message-row incoming">
                <div class="message-bubble">
                    Hi! Regarding our next Calculus II class, is there any specific sub-chapter you want to focus on?
                    <span class="message-meta-time">10:30 AM</span>
                </div>
            </div>

            <div class="message-row outgoing">
                <div class="message-bubble">
                    Hello Sis Dian! Yes, I am still having a bit of trouble with Integration by Parts and its applications.
                    <span class="message-meta-time">10:35 AM</span>
                </div>
            </div>

            <div class="message-row incoming">
                <div class="message-bubble">
                    I see. That's a common tricky part. I'll prepare some simpler step-by-step sample problems for you. Sure, you can send the question code here...
                    <span class="message-meta-time">10:42 AM</span>
                </div>
            </div>
        </div>

        <div class="chat-input-bar">
            <input type="text" class="chat-input-field" id="messageInputField" placeholder="Type a message here..." onkeypress="handleKeyPress(event)">
            <button class="btn-send-message" onclick="executeSendMessage()">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="transform: rotate(45deg); margin-left: -2px; margin-top: 2px;"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            </button>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    // Data dummy simulasi chat untuk tiap tutor saat dipindah klik objeknya
    const chatDatastore = {
        'Dian Ramadhani': [
            { type: 'incoming', text: 'Hi! Regarding our next Calculus II class, is there any specific sub-chapter you want to focus on?', time: '10:30 AM' },
            { type: 'outgoing', text: 'Hello Sis Dian! Yes, I am still having a bit of trouble with Integration by Parts and its applications.', time: '10:35 AM' },
            { type: 'incoming', text: 'I see. That\'s a common tricky part. I\'ll prepare some simpler step-by-step sample problems for you. Sure, you can send the question code here...', time: '10:42 AM' }
        ],
        'Arief Santoso': [
            { type: 'incoming', text: 'Hello, regarding your Thermodynamics homework assignment, did you manage to clear problem 4?', time: 'Yesterday' },
            { type: 'outgoing', text: 'Not yet Kak Arief, I am still stuck with the ideal gas law derivation part.', time: 'Yesterday' },
            { type: 'incoming', text: 'Don\'t forget to review the PDF file tomorrow.', time: 'Yesterday' }
        ],
        'Siti Nurhaliza': [
            { type: 'incoming', text: 'Good afternoon, I have checked your Microeconomics essay draft.', time: '2 days ago' },
            { type: 'outgoing', text: 'Is the market structure analysis clear enough?', time: '2 days ago' },
            { type: 'incoming', text: 'Our class is confirmed for Wednesday.', time: '2 days ago' }
        ],
        'Budi Utomo': [
            { type: 'incoming', text: 'Your basic array structure logical code works well.', time: '1w ago' },
            { type: 'incoming', text: 'Great project submission! Keep it up.', time: '1w ago' }
        ]
    };

    // Objek warna tema inisial avatar agar tetap konsisten sesuai daftar
    const avatarStyles = {
        'DR': { bg: '#ffedd5', color: '#9a3412' },
        'AS': { bg: '#e0f2fe', color: '#0369a1' },
        'SN': { bg: '#dcfce7', color: '#15803d' },
        'BU': { bg: '#f3e8ff', color: '#6b21a8' }
    };

    // Fungsi Mengganti Percakapan Aktif
    function loadConversation(name, subject, status, initials) {
        // Ganti status kelas visual aktif di sidebar sebelah kiri
        const items = document.querySelectorAll('.chat-item');
        items.forEach(item => item.classList.remove('active'));
        event.currentTarget.classList.add('active');

        // Hilangkan penanda unread badge contoh jika di-klik
        const unread = event.currentTarget.querySelector('.unread-badge');
        if(unread) unread.style.display = 'none';

        // Update bagian Informasi Atas Header Chat Utama
        document.getElementById('activeChatName').innerText = name;
        document.getElementById('activeChatStatus').innerText = `${status === 'online' ? 'Active' : 'Offline'} • ${subject}`;
        
        const avatarHeader = document.getElementById('activeChatInitials');
        avatarHeader.innerText = initials;
        avatarHeader.style.backgroundColor = avatarStyles[initials].bg;
        avatarHeader.style.color = avatarStyles[initials].color;

        // Render Ulang Aliran Balon Chat Percakapan Konten di Box
        const conversationBox = document.getElementById('conversationBox');
        conversationBox.innerHTML = '';

        if(chatDatastore[name]) {
            chatDatastore[name].forEach(msg => {
                const msgRow = document.createElement('div');
                msgRow.className = `message-row ${msg.type}`;
                
                msgRow.innerHTML = `
                    <div class="message-bubble">
                        ${msg.text}
                        <span class="message-meta-time">${msg.time}</span>
                    </div>
                `;
                conversationBox.appendChild(msgRow);
            });
        }
        scrollConversationToBottom();
    }

    // Fungsi Mengirim Pesan Baru
    function executeSendMessage() {
        const inputElement = document.getElementById('messageInputField');
        const text = inputElement.value.trim();
        
        if (text === '') return;

        const currentActiveName = document.getElementById('activeChatName').innerText;
        const currentTimeString = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

        // Simpan data inputan baru ke dalam array local memory datastore
        if (!chatDatastore[currentActiveName]) {
            chatDatastore[currentActiveName] = [];
        }
        chatDatastore[currentActiveName].push({
            type: 'outgoing',
            text: text,
            time: currentTimeString
        });

        // Append element node balon chat secara langsung ke UI box screen
        const conversationBox = document.getElementById('conversationBox');
        const msgRow = document.createElement('div');
        msgRow.className = 'message-row outgoing';
        msgRow.innerHTML = `
            <div class="message-bubble">
                ${text}
                <span class="message-meta-time">${currentTimeString}</span>
            </div>
        `;
        
        conversationBox.appendChild(msgRow);
        
        // Reset kolom text input dan arahkan scroll ke bagian paling bawah chat
        inputElement.value = '';
        scrollConversationToBottom();
    }

    // Mencegah refresh halaman dan memicu kirim chat saat tekan tombol 'Enter'
    function handleKeyPress(event) {
        if (event.key === 'Enter') {
            executeSendMessage();
        }
    }

    // Menggulung area obrolan agar selalu fokus pada pesan paling baru di bawah
    function scrollConversationToBottom() {
        const conversationBox = document.getElementById('conversationBox');
        conversationBox.scrollTop = conversationBox.scrollHeight;
    }

    // Jalankan auto-scroll ke bawah saat halaman pertama kali dimuat
    document.addEventListener("DOMContentLoaded", function() {
        scrollConversationToBottom();
    });
</script>
@endpush