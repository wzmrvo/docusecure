---
name: freellmapi
description: >-
  FreeLLMAPI integration and setup skill. Connects agents, CLI tools, and applications
  to 87 free LLM providers (1,300+ free model endpoints) behind a single OpenAI/Anthropic/MCP
  compatible /v1 endpoint with smart routing, automatic failover, and token management.
  Source: https://github.com/tashfeenahmed/freellmapi
---

# FreeLLMAPI Skill

Aggregate free tiers from 87+ LLM providers (Google Gemini, Groq, Cloudflare, DeepSeek, Mistral, Together, Cohere, etc.) behind a unified local API endpoint and MCP server.

## Overview

- **Repository**: [github.com/tashfeenahmed/freellmapi](https://github.com/tashfeenahmed/freellmapi)
- **Official Site**: [freellmapi.co](https://freellmapi.co)
- **Core Function**: Translates requests, handles smart failover when rate limits are hit, encrypts API keys at rest in SQLite, and exposes standard endpoints:
  - OpenAI-compatible `/v1/chat/completions` & `/v1/models`
  - Anthropic Messages API (for Claude Desktop / Claude Code)
  - MCP Server endpoint (`/mcp`) for agentic tool use

---

## Quick Start & Installation

### Option 1: Docker Compose (Recommended for Local Server)

```powershell
# In PowerShell:
git clone https://github.com/tashfeenahmed/freellmapi.git
cd freellmapi

$Bytes = New-Object Byte[] 32
[Security.Cryptography.RandomNumberGenerator]::Create().GetBytes($Bytes)
$ENCRYPTION_KEY = -join ($Bytes | ForEach-Object { "{0:x2}" -f $_ })
"ENCRYPTION_KEY=$ENCRYPTION_KEY`nPORT=3001" | Out-File -Encoding utf8 .env
docker compose up -d
```

### Option 2: One-Liner (Bash / WSL)

```bash
curl -fsSL https://freellmapi.co/install.sh | bash
```

### Option 3: Desktop App
Download the native Windows desktop app from Microsoft Store or GitHub Releases. It runs locally in the system tray on `http://127.0.0.1:31415`.

---

## Connecting Clients & Coding Agents

### 1. OpenAI-Compatible Clients (Python, PHP, Node, Laravel)

Point your SDK base URL to FreeLLMAPI:

- **Base URL**: `http://localhost:3001/v1` (or `http://127.0.0.1:31415/v1` for desktop)
- **API Key**: Unified key generated on the FreeLLMAPI dashboard (`freellmapi-...`)

#### Laravel Example (`config/services.php` or `.env`):
```env
OPENAI_BASE_URL=http://localhost:3001/v1
OPENAI_API_KEY=freellmapi-your-unified-key
```

### 2. Anthropic Messages / Claude Code Gateway

```powershell
$env:ANTHROPIC_BASE_URL = "http://127.0.0.1:31415"
$env:ANTHROPIC_AUTH_TOKEN = "freellmapi-your-unified-key"
$env:CLAUDE_CODE_AUTO_MODE_SERVER = "0"
```

### 3. MCP (Model Context Protocol) Integration

FreeLLMAPI serves as an MCP server at `/mcp`:
```json
{
  "mcpServers": {
    "freellmapi": {
      "url": "http://127.0.0.1:3001/mcp",
      "headers": {
        "Authorization": "Bearer freellmapi-your-unified-key"
      }
    }
  }
}
```

---

## Key Features to Leverage

1. **Automatic Failover**: When a provider hits rate limits (HTTP 429), the router seamlessly falls over to the next provider in the chain without failing your request.
2. **Context Handoff**: If models switch mid-stream, FreeLLMAPI injects a handoff context summarizing the ongoing conversation to preserve coherence.
3. **Prompt Compression**: Built-in AST/whitespace and lexical compression reduces token consumption on free tiers.
4. **Offline / Fallback Support**: Re-route tasks to local Ollama or LM Studio models if external networks are unavailable.

---

## Usage Triggers

Activate this skill when:
- Needing free LLM API endpoints or routing for backend tasks
- Configuring OpenAI-compatible endpoints or proxy servers
- Setting up failover chains across multiple free AI providers
- Connecting coding agents to unified local endpoints
