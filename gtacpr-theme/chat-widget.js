(function () {
  const API_URL = (window.GTACPR && window.GTACPR.chatApiUrl)
    || '/wp-content/themes/gtacpr-theme/chat-api.php'; // fallback

  const style = document.createElement('style');
  style.textContent = `
    #gtacpr-chat-btn {
      position: fixed;
      bottom: 90px;
      right: 20px;
      z-index: 1000;
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: #CC1F1F;
      color: #fff;
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 16px rgba(0,0,0,0.25);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.15s, transform 0.15s;
      font-family: inherit;
    }
    #gtacpr-chat-btn:hover { background: #9B1515; transform: scale(1.05); }
    #gtacpr-chat-btn svg { width: 26px; height: 26px; }

    #gtacpr-chat-badge {
      position: absolute;
      top: -4px;
      right: -4px;
      width: 18px;
      height: 18px;
      background: #F59E0B;
      border-radius: 50%;
      font-size: 11px;
      font-weight: 700;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #fff;
    }

    #gtacpr-chat-window {
      position: fixed;
      bottom: 160px;
      right: 20px;
      z-index: 1000;
      width: 340px;
      max-width: calc(100vw - 32px);
      height: 480px;
      max-height: calc(100vh - 180px);
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 8px 40px rgba(0,0,0,0.18);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      font-size: 14px;
      opacity: 0;
      transform: translateY(12px) scale(0.97);
      transition: opacity 0.2s, transform 0.2s;
      pointer-events: none;
    }
    #gtacpr-chat-window.open {
      opacity: 1;
      transform: translateY(0) scale(1);
      pointer-events: all;
    }

    #gtacpr-chat-header {
      background: #CC1F1F;
      color: #fff;
      padding: 14px 16px;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }
    #gtacpr-chat-header-icon {
      width: 36px;
      height: 36px;
      background: rgba(255,255,255,0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    #gtacpr-chat-header-icon svg { width: 20px; height: 20px; }
    #gtacpr-chat-header-text { flex: 1; }
    #gtacpr-chat-header-text strong { display: block; font-size: 14px; font-weight: 700; }
    #gtacpr-chat-header-text span { font-size: 11.5px; opacity: 0.8; }
    #gtacpr-chat-close {
      width: 30px;
      height: 30px;
      background: rgba(255,255,255,0.15);
      border: none;
      border-radius: 50%;
      color: #fff;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    #gtacpr-chat-close svg { width: 16px; height: 16px; }
    #gtacpr-chat-close:hover { background: rgba(255,255,255,0.25); }

    #gtacpr-chat-messages {
      flex: 1;
      overflow-y: auto;
      padding: 14px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      background: #F9FAFB;
    }
    .gc-msg {
      max-width: 82%;
      padding: 9px 12px;
      border-radius: 12px;
      line-height: 1.5;
      font-size: 13.5px;
      word-break: break-word;
    }
    .gc-msg.bot {
      background: #fff;
      color: #1F2937;
      border: 1px solid #E5E7EB;
      align-self: flex-start;
      border-bottom-left-radius: 4px;
    }
    .gc-msg.user {
      background: #CC1F1F;
      color: #fff;
      align-self: flex-end;
      border-bottom-right-radius: 4px;
    }
    .gc-typing {
      display: flex;
      gap: 4px;
      align-items: center;
      padding: 10px 14px;
      background: #fff;
      border: 1px solid #E5E7EB;
      border-radius: 12px;
      border-bottom-left-radius: 4px;
      align-self: flex-start;
    }
    .gc-dot {
      width: 7px; height: 7px;
      background: #9CA3AF;
      border-radius: 50%;
      animation: gc-bounce 1.2s infinite;
    }
    .gc-dot:nth-child(2) { animation-delay: 0.2s; }
    .gc-dot:nth-child(3) { animation-delay: 0.4s; }
    @keyframes gc-bounce {
      0%, 60%, 100% { transform: translateY(0); }
      30% { transform: translateY(-5px); }
    }

    #gtacpr-chat-suggestions {
      padding: 8px 12px 0;
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
      background: #F9FAFB;
      flex-shrink: 0;
    }
    .gc-suggestion {
      background: #fff;
      border: 1px solid #E5E7EB;
      border-radius: 20px;
      padding: 5px 11px;
      font-size: 12px;
      color: #4B5563;
      cursor: pointer;
      font-family: inherit;
      transition: border-color 0.15s, background 0.15s;
      white-space: nowrap;
    }
    .gc-suggestion:hover { border-color: #CC1F1F; color: #CC1F1F; background: #FFF0F0; }

    #gtacpr-chat-input-row {
      padding: 10px 12px;
      background: #fff;
      border-top: 1px solid #E5E7EB;
      display: flex;
      gap: 8px;
      align-items: center;
      flex-shrink: 0;
    }
    #gtacpr-chat-input {
      flex: 1;
      border: 1px solid #E5E7EB;
      border-radius: 8px;
      padding: 9px 12px;
      font-size: 13.5px;
      font-family: inherit;
      outline: none;
      color: #1F2937;
      resize: none;
      line-height: 1.4;
      max-height: 80px;
      overflow-y: auto;
    }
    #gtacpr-chat-input:focus { border-color: #CC1F1F; }
    #gtacpr-chat-send {
      width: 36px;
      height: 36px;
      background: #CC1F1F;
      border: none;
      border-radius: 8px;
      color: #fff;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: background 0.15s;
    }
    #gtacpr-chat-send:hover { background: #9B1515; }
    #gtacpr-chat-send:disabled { background: #E5E7EB; cursor: not-allowed; }
    #gtacpr-chat-send svg { width: 17px; height: 17px; }

    @media (max-width: 480px) {
      #gtacpr-chat-window { bottom: 80px; right: 12px; left: 12px; width: auto; }
      #gtacpr-chat-btn { bottom: 80px; right: 12px; }
    }
  `;
  document.head.appendChild(style);

  // Build HTML
  const btn = document.createElement('button');
  btn.id = 'gtacpr-chat-btn';
  btn.setAttribute('aria-label', 'Chat with us');
  btn.innerHTML = `
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
    </svg>
    <span id="gtacpr-chat-badge">1</span>
  `;

  const win = document.createElement('div');
  win.id = 'gtacpr-chat-window';
  win.setAttribute('role', 'dialog');
  win.setAttribute('aria-label', 'GTACPR Chat Assistant');
  win.innerHTML = `
    <div id="gtacpr-chat-header">
      <div id="gtacpr-chat-header-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14z"/>
        </svg>
      </div>
      <div id="gtacpr-chat-header-text">
        <strong>Shanti</strong>
        <span>Ask me anything about courses</span>
      </div>
      <button id="gtacpr-chat-close" aria-label="Close chat">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
    </div>
    <div id="gtacpr-chat-messages"></div>
    <div id="gtacpr-chat-suggestions">
      <button class="gc-suggestion">Which course do I need?</button>
      <button class="gc-suggestion">How much does it cost?</button>
      <button class="gc-suggestion">Group training</button>
      <button class="gc-suggestion">ESL classes</button>
    </div>
    <div id="gtacpr-chat-input-row">
      <textarea id="gtacpr-chat-input" rows="1" placeholder="Ask a question..." aria-label="Chat message"></textarea>
      <button id="gtacpr-chat-send" aria-label="Send message">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
        </svg>
      </button>
    </div>
  `;

  document.body.appendChild(btn);
  document.body.appendChild(win);

  // State
  const messages = [];
  let isOpen = false;
  let isLoading = false;

  const messagesEl = win.querySelector('#gtacpr-chat-messages');
  const input = win.querySelector('#gtacpr-chat-input');
  const sendBtn = win.querySelector('#gtacpr-chat-send');
  const badge = btn.querySelector('#gtacpr-chat-badge');
  const suggestions = win.querySelector('#gtacpr-chat-suggestions');

  function addMessage(role, text) {
    const el = document.createElement('div');
    el.className = `gc-msg ${role}`;
    el.textContent = text;
    messagesEl.appendChild(el);
    messagesEl.scrollTop = messagesEl.scrollHeight;
    return el;
  }

  function showTyping() {
    const el = document.createElement('div');
    el.className = 'gc-typing';
    el.id = 'gc-typing-indicator';
    el.innerHTML = '<div class="gc-dot"></div><div class="gc-dot"></div><div class="gc-dot"></div>';
    messagesEl.appendChild(el);
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function hideTyping() {
    const el = document.getElementById('gc-typing-indicator');
    if (el) el.remove();
  }

  async function sendMessage(text) {
    if (!text.trim() || isLoading) return;
    isLoading = true;
    sendBtn.disabled = true;
    suggestions.style.display = 'none';

    messages.push({ role: 'user', content: text });
    addMessage('user', text);
    showTyping();

    try {
      const res = await fetch(API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ messages })
      });
      const data = await res.json();
      hideTyping();
      const reply = data.reply || 'Sorry, I had trouble answering that. Please call us at 416-723-2571.';
      messages.push({ role: 'assistant', content: reply });
      addMessage('bot', reply);
    } catch {
      hideTyping();
      addMessage('bot', 'Connection error. Please call us at 416-723-2571.');
    }

    isLoading = false;
    sendBtn.disabled = false;
    input.focus();
  }

  // Welcome message
  function openChat() {
    isOpen = true;
    win.classList.add('open');
    badge.style.display = 'none';
    if (messages.length === 0) {
      addMessage('bot', 'Hi! I\'m the GTACPR assistant. I can help you choose the right CPR course, answer questions about pricing, group training, ESL classes, and more. What can I help you with?');
    }
    input.focus();
  }

  function closeChat() {
    isOpen = false;
    win.classList.remove('open');
  }

  btn.addEventListener('click', () => isOpen ? closeChat() : openChat());
  win.querySelector('#gtacpr-chat-close').addEventListener('click', closeChat);

  sendBtn.addEventListener('click', () => {
    sendMessage(input.value);
    input.value = '';
    input.style.height = 'auto';
  });

  input.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' && !e.shiftKey) {
      e.preventDefault();
      sendMessage(input.value);
      input.value = '';
      input.style.height = 'auto';
    }
  });

  // Auto-resize textarea
  input.addEventListener('input', () => {
    input.style.height = 'auto';
    input.style.height = Math.min(input.scrollHeight, 80) + 'px';
  });

  // Suggestion chips
  win.querySelectorAll('.gc-suggestion').forEach(chip => {
    chip.addEventListener('click', () => {
      sendMessage(chip.textContent);
    });
  });
})();
