<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Thiago, Rodrigo, Vinícius, Vitor">
  <meta name="description" content="ETEC Jornalista Roberto Marinho">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keyword" content="ETEC, Roberto Marinho, Jornalista Roberto Marinho">

  <title>ETEC Jornalista Roberto Marinho</title>

  <link rel="icon" href="../recursos/svg/etec.svg">
  <link rel="stylesheet" href="../css/proposito.css">
  <link rel="manifest" href="../manifest.webmanifest">
  <link rel="apple-touch-icon" href="../recursos/images/favicon/etecFavicon-128px.png" />
  <link rel="apple-touch-icon" href="../recursos/images/favicon/etecFavicon-192px.png" />
  <link rel="apple-touch-icon" href="../recursos/images/favicon/etecFavicon-384px.png" />
  <link rel="apple-touch-icon" href="../recursos/images/favicon/etecFavicon-512px.png" />
  <meta name="apple-mobile-web-app-status-bar" content="#f68b37">
  <meta name="theme-color" content="#820024">

  <script src="../js/index.js" defer></script>
  <script src="../js/themeSwitcher.js" defer></script>
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=pdXGWNMM" defer></script>
</head>

<body>
  <div class="context">
    <ul class="context-options">
      <li onclick="setLight()" class="context-option light">Tema Claro</li>
      <li onclick="setDark()" class="context-option dark">Tema Escuro</li>
      <li onclick="setContrast()" class="context-option contrast">Tema Contraste</li>
    </ul>
  </div>

  <header>
    <nav>
      <div class="acessibilidade">
        <div class="tema">
          <div onclick="dropdownTema()" class="top"> 
            <svg class="down-arrow"
              xmlns="http://www.w3.org/2000/svg" 
              width="18" 
              height="18" 
              fill="#fff"
              viewBox="0 0 24 24">
              <path
              d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/>
            </svg>
            <div class="tema1"></div>
          </div>
          <div class="dropdown">
            <div onclick="setLight()" class="row light">    
              <div class="tema2"></div>
              <h1>Tema Claro</h1>
            </div>
            <div onclick="setDark()" class="row dark">
              <div class="tema3"></div>
              <h1>Tema Escuro</h1>
            </div>
            <div onclick="setContrast()" class="row contrast">
              <div class="tema4"></div>
              <h1>Tema Contraste</h1>
            </div>
          </div>
        </div>

        <div class="idioma">
          <div onclick="dropdownIdioma()" class="top"> 
            <svg id="active" class="br" 
              xmlns="http://www.w3.org/2000/svg" 
              height="20" 
              viewBox="1 -79 511.999 511" 
              width="20">
              <path 
                d="m397.242188 353.601562h97.101562c9.75 0 17.65625-7.902343 17.65625-17.652343v-317.792969c0-9.753906-7.90625-17.65625-17.65625-17.65625h-476.6875c-9.753906 0-17.65625 7.90625-17.65625 17.65625v317.792969c0 9.75 7.902344 17.652343 17.65625 17.652343zm0 0" 
                fill="#4c8056"/>
              <path 
                d="m79.449219 168.222656 176.550781 114.761719 176.550781-114.761719-176.550781-114.757812zm0 0" 
                fill="#f3d55b"/>
              <path 
                d="m317.792969 168.222656c.066406 12.941406-4.019531 25.566406-11.652344 36.019532-4.054687 5.761718-9.109375 10.753906-14.917969 14.742187-10.324218 7.21875-22.625 11.070313-35.222656 11.03125-16.390625.011719-32.117188-6.492187-43.707031-18.085937-11.59375-11.589844-18.097657-27.3125-18.085938-43.707032-.015625-.472656.015625-.945312.085938-1.414062.070312-7.074219 1.445312-14.078125 4.0625-20.65625 10.625-27.832032 39.609375-44.109375 68.90625-38.695313 29.296875 5.414063 50.550781 30.972657 50.53125 60.765625zm0 0" 
                fill="#3b97d3"/>
              <path 
                d="m306.140625 204.242188c-4.054687 5.761718-9.109375 10.753906-14.917969 14.742187l-.882812-4.945313c-3.539063-19.945312-16.011719-37.175781-33.859375-46.761718-17.847657-9.585938-39.101563-10.472656-57.683594-2.40625l-4.5 1.941406c.066406-7.078125 1.441406-14.078125 4.058594-20.65625 8.605469-2.964844 17.648437-4.457031 26.75-4.414062 38.113281-.121094 71.46875 25.601562 81.035156 62.5zm0 0" 
                fill="#ecf0f1"/>
            </svg>
            <svg class="down-arrow"
              xmlns="http://www.w3.org/2000/svg" 
              width="18" 
              height="18" 
              fill="#fff"
              viewBox="0 0 24 24">
              <path
              d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/>
            </svg>
          </div>
          <div class="dropdown">
            <div id="active" onclick="alert('Esse idioma já esta em uso!');" class="row">    
              <svg class="br" 
                xmlns="http://www.w3.org/2000/svg" 
                height="20" 
                viewBox="1 -79 511.999 511" 
                width="20">
                <path 
                  d="m397.242188 353.601562h97.101562c9.75 0 17.65625-7.902343 17.65625-17.652343v-317.792969c0-9.753906-7.90625-17.65625-17.65625-17.65625h-476.6875c-9.753906 0-17.65625 7.90625-17.65625 17.65625v317.792969c0 9.75 7.902344 17.652343 17.65625 17.652343zm0 0" 
                  fill="#4c8056"/>
                <path 
                  d="m79.449219 168.222656 176.550781 114.761719 176.550781-114.761719-176.550781-114.757812zm0 0" 
                  fill="#f3d55b"/>
                <path 
                  d="m317.792969 168.222656c.066406 12.941406-4.019531 25.566406-11.652344 36.019532-4.054687 5.761718-9.109375 10.753906-14.917969 14.742187-10.324218 7.21875-22.625 11.070313-35.222656 11.03125-16.390625.011719-32.117188-6.492187-43.707031-18.085937-11.59375-11.589844-18.097657-27.3125-18.085938-43.707032-.015625-.472656.015625-.945312.085938-1.414062.070312-7.074219 1.445312-14.078125 4.0625-20.65625 10.625-27.832032 39.609375-44.109375 68.90625-38.695313 29.296875 5.414063 50.550781 30.972657 50.53125 60.765625zm0 0" 
                  fill="#3b97d3"/>
                <path 
                  d="m306.140625 204.242188c-4.054687 5.761718-9.109375 10.753906-14.917969 14.742187l-.882812-4.945313c-3.539063-19.945312-16.011719-37.175781-33.859375-46.761718-17.847657-9.585938-39.101563-10.472656-57.683594-2.40625l-4.5 1.941406c.066406-7.078125 1.441406-14.078125 4.058594-20.65625 8.605469-2.964844 17.648437-4.457031 26.75-4.414062 38.113281-.121094 71.46875 25.601562 81.035156 62.5zm0 0" 
                  fill="#ecf0f1"/>
              </svg>
              <h1>Português</h1>
            </div>
            <div onclick="location.href = './ingles/paginas/proposito.php'" class="row">
              <svg id="" class="eua"
                xmlns="http://www.w3.org/2000/svg" 
                height="20" 
                viewBox="0 -94 512 512" 
                width=20>
                <path 
                  d="m512 269.613281v14.984375c0 21.503906-17.4375 38.945313-38.953125 38.945313h-434.105469c-21.511718 0-38.941406-17.441407-38.941406-38.945313v-14.984375zm0 0" fill="#e8e7e6"/><path d="m512 161.769531v53.929688h-512v-53.929688zm0 0" 
                  fill="#e8e7e6"/>
                <path 
                  d="m0 53.925781h512v53.917969h-512zm0 0" 
                  fill="#e8e7e6"/>
                <path 
                  d="m0 215.699219h512v53.914062h-512zm0 0" 
                  fill="#ff4440"/>
                <path 
                  d="m512 107.84375v53.925781h-512v-53.925781zm0 0" 
                  fill="#ff4440"/>
                <path 
                  d="m512 38.941406v14.984375h-512v-14.984375c0-21.511718 17.429688-38.941406 38.941406-38.941406h434.105469c21.515625 0 38.953125 17.429688 38.953125 38.941406zm0 0" 
                  fill="#ff4440"/>
                <path 
                  d="m237.726562 36.382812v85.003907c0 22.304687-18.082031 40.382812-40.386718 40.382812h-197.339844v-122.828125c0-21.507812 17.433594-38.941406 38.941406-38.941406h162.398438c20.09375 0 36.386718 16.289062 36.386718 36.382812zm0 0" 
                  fill="#5eaad1"/>
                <g 
                  fill="#e8e7e6">
                  <path 
                    d="m44.417969 47.96875c-3.144531 0-6.03125-1.9375-7.238281-4.835938-1.308594-3.136718-.367188-6.898437 2.261718-9.050781 2.699219-2.207031 6.628906-2.347656 9.484375-.347656 2.675781 1.875 3.917969 5.34375 3.035157 8.492187-.9375 3.351563-4.050782 5.742188-7.542969 5.742188zm0 0"/>
                  <path 
                    d="m118.859375 47.96875c-7.183594 0-10.539063-9.355469-4.964844-13.890625 5.378907-4.375 13.574219.136719 12.746094 7.019531-.46875 3.882813-3.886719 6.871094-7.78125 6.871094zm0 0"/>
                  <path 
                    d="m193.308594 47.96875c-7.121094 0-10.503906-9.179688-5.089844-13.792969 5.394531-4.59375 13.902344.109375 12.835938 7.113281-.574219 3.792969-3.902344 6.679688-7.746094 6.679688zm0 0"/>
                  <path 
                    d="m81.640625 47.96875c-3.488281 0-6.613281-2.386719-7.546875-5.742188-.882812-3.160156.375-6.648437 3.070312-8.515624 5.746094-3.976563 13.660157 1.300781 12.113282 8.148437-.796875 3.53125-4.011719 6.109375-7.636719 6.109375zm0 0"/>
                  <path 
                    d="m156.089844 47.96875c-3.148438 0-6.03125-1.9375-7.242188-4.835938-1.308594-3.144531-.363281-6.894531 2.265625-9.050781 2.640625-2.167969 6.476563-2.339843 9.324219-.457031 2.71875 1.796875 4.050781 5.261719 3.246094 8.417969-.878906 3.441406-4.035156 5.925781-7.59375 5.925781zm0 0"/>
                  <path 
                    d="m63.027344 88.722656c-3.203125 0-6.15625-2.027344-7.308594-5.015625-1.191406-3.101562-.257812-6.773437 2.335938-8.875 5.566406-4.507812 14.105468.492188 12.652343 7.589844-.734375 3.613281-3.972656 6.300781-7.679687 6.300781zm0 0"/>
                  <path 
                    d="m137.46875 88.722656c-3.214844 0-6.136719-2.035156-7.300781-5.015625-1.230469-3.15625-.21875-6.882812 2.453125-8.972656 5.585937-4.371094 13.972656.664063 12.539062 7.6875-.742187 3.617187-3.988281 6.300781-7.691406 6.300781zm0 0"/>
                  <path 
                    d="m100.25 88.722656c-3.277344 0-6.265625-2.117187-7.371094-5.195312-1.117187-3.117188-.097656-6.753906 2.523438-8.792969 2.703125-2.109375 6.503906-2.222656 9.324218-.273437 2.695313 1.867187 3.960938 5.355468 3.078126 8.515624-.941407 3.351563-4.074219 5.746094-7.554688 5.746094zm0 0"/>
                  <path 
                    d="m174.699219 88.722656c-7.128907 0-10.488281-9.15625-5.09375-13.796875 5.511719-4.738281 14.226562.375 12.773437 7.496094-.738281 3.613281-3.976562 6.300781-7.679687 6.300781zm0 0"/>
                  <path 
                    d="m44.417969 129.472656c-7.347657 0-10.589844-9.636718-4.730469-14.085937 5.578125-4.234375 13.734375.804687 12.429688 7.699219-.691407 3.652343-3.96875 6.386718-7.699219 6.386718zm0 0"/>
                  <path 
                    d="m118.859375 129.472656c-7.136719 0-10.496094-9.160156-5.085937-13.792968 2.667968-2.285157 6.6875-2.488282 9.570312-.472657 2.738281 1.914063 3.980469 5.460938 3.023438 8.664063-.980469 3.28125-4.078126 5.601562-7.507813 5.601562zm0 0"/>
                  <path 
                    d="m193.308594 129.472656c-7.058594 0-10.472656-9.003906-5.203125-13.691406 2.625-2.335938 6.621093-2.617188 9.550781-.664062 2.625 1.746093 3.972656 5.039062 3.320312 8.128906-.761718 3.578125-4 6.226562-7.667968 6.226562zm0 0"/>
                  <path 
                    d="m81.640625 129.472656c-7.132813 0-10.515625-9.191406-5.0625-13.816406 5.371094-4.554688 13.851563.105469 12.8125 7.109375-.5625 3.796875-3.898437 6.707031-7.75 6.707031zm0 0"/>
                  <path 
                    d="m156.089844 129.472656c-6.882813 0-10.4375-8.683594-5.4375-13.480468 2.519531-2.421876 6.453125-2.871094 9.457031-1.082032 2.824219 1.683594 4.328125 5.117188 3.648437 8.335938-.761718 3.574218-4 6.226562-7.667968 6.226562zm0 0"/>
                </g>
              </svg>
              <h1>English</h1>
            </div>
            <div onclick="location.href = './espanhol/paginas/proposito.php'" class="row">
              <svg id="" class="esp" 
                xmlns="http://www.w3.org/2000/svg" 
                height="20" 
                viewBox="0 -79 512 512" 
                width="20">
                <path 
                  d="m397.242188 353.105469h97.101562c9.75 0 17.65625-7.90625 17.65625-17.65625v-317.792969c0-9.753906-7.90625-17.65625-17.65625-17.65625h-476.6875c-9.753906 0-17.65625 7.90625-17.65625 17.65625v317.792969c0 9.75 7.902344 17.652343 17.65625 17.652343h379.585938zm0 0" 
                  fill="#c03a2b"/>
                <path 
                  d="m344.71875 291.3125h167.28125v-229.519531h-512v229.519531zm0 0" 
                  fill="#f0c419"/>
                <path 
                  d="m123.585938 158.898438h35.308593v35.308593h-35.308593zm0 0" 
                  fill="#fff"/>
                <path 
                  d="m88.277344 158.898438h35.308594v35.308593h-35.308594zm0 0" 
                  fill="#d75e72"/>
                <path 
                  d="m158.898438 194.207031v17.65625c.007812 7.027344-2.78125 13.765625-7.746094 18.734375-4.96875 4.96875-11.710938 7.757813-18.738282 7.746094h-17.652343c-7.027344.007812-13.769531-2.777344-18.738281-7.746094s-7.753907-11.710937-7.746094-18.734375v-17.65625zm0 0" 
                  fill="#f0c419"/>
                <path 
                  d="m158.898438 194.207031v17.65625c0 14.625-5.929688 26.480469-13.242188 26.480469h-22.070312v-44.136719zm0 0" 
                  fill="#d75e72"/>
                <path 
                  d="m123.585938 141.242188v17.65625h-35.308594c-4.871094-.015626-8.8125-3.960938-8.828125-8.828126v-8.828124c.027343-9.738282 7.914062-17.628907 17.652343-17.65625h8.828126c9.742187.023437 17.632812 7.914062 17.65625 17.65625zm0 0" 
                  fill="#f0c419"/>
                <path 
                  d="m167.722656 141.242188v8.828124c-.011718 4.867188-3.957031 8.8125-8.828125 8.828126h-35.308593v-17.65625c.023437-9.742188 7.914062-17.632813 17.65625-17.65625h8.828124c9.738282.027343 17.625 7.917968 17.652344 17.65625zm0 0" 
                  fill="#f0c419"/>
                <path 
                  d="m61.792969 247.171875h-17.65625c-4.875 0-8.828125-3.949219-8.828125-8.828125 0-4.875 3.953125-8.828125 8.828125-8.828125v-70.621094c0-4.875 3.953125-8.828125 8.828125-8.828125 4.878906 0 8.828125 3.953125 8.828125 8.828125v70.621094c4.875 0 8.828125 3.953125 8.828125 8.828125 0 4.878906-3.953125 8.828125-8.828125 8.828125zm0 0" 
                  fill="#fff"/>
                <path 
                  d="m203.035156 247.171875h-17.65625c-4.875 0-8.828125-3.949219-8.828125-8.828125 0-4.875 3.953125-8.828125 8.828125-8.828125v-70.621094c0-4.875 3.953125-8.828125 8.828125-8.828125s8.828125 3.953125 8.828125 8.828125v70.621094c4.875 0 8.828125 3.953125 8.828125 8.828125 0 4.878906-3.953125 8.828125-8.828125 8.828125zm0 0" 
                  fill="#fff"/>
                <path 
                  d="m150.070312 114.757812h-8.828124c-3.015626.03125-6.003907.582032-8.828126 1.628907v-10.453125c0-4.875-3.953124-8.828125-8.828124-8.828125s-8.828126 3.949219-8.828126 8.828125v10.453125c-2.828124-1.046875-5.8125-1.597657-8.828124-1.628907h-8.828126c-14.621093.015626-26.46875 11.863282-26.484374 26.484376v8.828124c.019531 6.277344 3.386718 12.070313 8.828124 15.199219v46.59375c.023438 19.492188 15.820313 35.289063 35.3125 35.308594h17.652344c19.492188-.019531 35.289063-15.816406 35.3125-35.308594v-46.59375c5.441406-3.128906 8.804688-8.921875 8.828125-15.199219v-8.828124c-.015625-14.621094-11.863281-26.46875-26.480469-26.484376zm-8.828124 17.65625h8.828124c4.871094.003907 8.820313 3.953126 8.828126 8.828126v8.828124h-26.484376v-8.828124c.003907-4.875 3.953126-8.824219 8.828126-8.828126zm8.828124 52.964844h-17.65625v-17.652344h17.65625zm-35.3125 0h-17.65625v-17.652344h17.65625zm-26.480468-44.136718c.003906-4.875 3.953125-8.824219 8.828125-8.828126h8.828125c4.871094.003907 8.820312 3.953126 8.828125 8.828126v8.828124h-26.484375zm8.824218 70.621093v-8.828125h17.65625v26.480469c-9.746093-.007813-17.644531-7.90625-17.65625-17.652344zm35.3125 17.65625v-26.484375h17.65625v8.828125c-.011718 9.746094-7.910156 17.644531-17.65625 17.65625zm0 0" 
                  fill="#c03a2b"/>
              </svg>
              <h1>Español</h1>
            </div>
          </div>
        </div>
      </div>
      <div id="separador" class="primeiro"></div>
      <div class="menu">
        <a href="../" rel="noopener">INÍCIO</a>
        <a href="./proposito.php" rel="noopener" class="active">PROPÓSITO</a>
        <a href="./espacoAluno.php" rel="noopener">ESPAÇO DO ALUNO</a>
        <a href="./cursosTecnicos.php" rel="noopener">CURSOS TÉCNICOS</a>
        <a href="./faleConosco.php" rel="noopener">FALE CONOSCO</a>
      </div>
      <div id="separador" class="segundo"></div>
    </nav>

    <div id="menu">
      <div id="separador" class="terceiro"></div>

      <svg class="logoEtec"
        version="1.0" 
        xmlns="http://www.w3.org/2000/svg" 
        width="80px" 
        height="80px" 
        viewBox="0 0 1000 1000" 
        preserveAspectRatio="xMidYMid meet">
        <g 
          id="layer101" 
          fill="#f68933" 
          stroke="none">
          <path 
            d="M477 965 c-9 -19 -19 -63 -23 -98 l-6 -64 -97 -17 c-116 -20 -114 -20 -173 -18 -41 2 -48 5 -48 22 0 25 44 125 59 134 17 11 13 26 -7 26 -38 0 -90 -49 -124 -117 -29 -59 -33 -77 -32 -141 1 -76 9 -92 47 -92 9 0 22 11 28 24 7 15 17 22 28 19 9 -2 77 -10 151 -17 l135 -12 -120 -8 c-119 -7 -244 -21 -277 -32 -24 -7 -23 -49 1 -60 17 -8 146 -163 334 -403 26 -33 47 -69 47 -81 0 -46 45 -4 55 52 7 36 9 38 45 38 36 0 38 -2 45 -37 10 -58 55 -99 55 -52 0 26 353 471 382 481 14 6 18 15 16 35 -3 27 -6 28 -83 40 -44 6 -136 15 -205 19 l-125 8 135 12 c74 7 143 15 153 18 12 3 21 -3 28 -20 7 -20 15 -25 36 -22 24 3 29 9 36 48 11 63 1 119 -34 190 -31 61 -85 110 -121 110 -20 0 -24 -15 -8 -25 16 -10 48 -77 55 -118 l7 -37 -48 -2 c-61 -2 -59 -2 -175 18 l-96 17 -6 56 c-7 63 -29 133 -43 138 -6 2 -18 -12 -27 -32z m-15 -236 c7 -50 69 -49 76 0 3 22 6 22 110 16 150 -8 212 -15 212 -24 0 -16 -60 -33 -204 -58 l-151 -25 -135 21 c-179 28 -246 48 -227 67 4 4 57 10 119 14 201 12 196 13 200 -11z m-350 -241 c8 -7 41 -51 73 -98 32 -47 72 -105 90 -130 37 -52 53 -80 38 -65 -9 9 -139 177 -207 268 -28 36 -25 49 6 25z m801 0 c-6 -7 -60 -79 -122 -160 -62 -82 -114 -148 -117 -148 -2 0 17 30 43 68 25 37 71 103 101 147 55 80 78 105 95 105 6 0 6 -5 0 -12z m-718 -30 c28 -39 165 -273 165 -281 0 -5 -45 60 -100 143 -55 82 -100 153 -100 155 0 13 21 3 35 -17z m560 -117 c-48 -72 -89 -131 -92 -131 -3 0 5 17 17 38 13 20 45 76 72 125 44 76 75 113 86 102 2 -1 -36 -62 -83 -134z m-428 102 l82 -17 21 -48 c20 -46 20 -49 4 -148 -10 -55 -21 -100 -26 -100 -4 0 -8 5 -8 12 0 6 -38 78 -85 160 -47 82 -85 151 -85 154 0 6 9 5 97 -13z m443 11 c0 -7 -156 -284 -174 -309 -12 -16 -14 -10 -25 59 -15 104 -14 149 5 189 15 31 23 35 88 49 80 18 106 21 106 12z m-240 -29 c0 -11 -24 -55 -31 -55 -4 0 -12 14 -18 30 -10 29 -9 30 20 30 16 0 29 -2 29 -5z m-11 -195 c6 -28 11 -53 11 -55 0 -7 -45 -6 -52 0 -7 8 13 105 22 105 5 0 13 -23 19 -50z"
          />
        </g>

        <g 
          id="layer102" 
          fill="#f68933" 
          stroke="none">
          <path 
            d="M235 604 c-92 -9 -206 -25 -220 -30 -22 -9 -18 -49 4 -60 17 -8 146 -163 334 -403 26 -33 47 -69 47 -81 0 -46 45 -4 55 53 7 35 9 37 45 37 36 0 38 -2 45 -37 10 -58 55 -99 55 -52 0 26 353 471 382 481 14 6 18 15 16 35 -3 27 -7 29 -83 41 -77 12 -597 24 -680 16z m-123 -116 c8 -7 41 -51 73 -98 32 -47 72 -105 90 -130 37 -52 53 -80 38 -65 -9 9 -139 177 -207 268 -28 36 -25 49 6 25z m801 0 c-6 -7 -60 -79 -122 -160 -62 -82 -114 -148 -117 -148 -2 0 17 30 43 68 25 37 71 103 101 147 55 80 78 105 95 105 6 0 6 -5 0 -12z m-718 -30 c28 -39 165 -273 165 -281 0 -5 -45 60 -100 143 -55 82 -100 153 -100 155 0 13 21 3 35 -17z m560 -117 c-48 -72 -89 -131 -92 -131 -3 0 5 17 17 38 13 20 45 76 72 125 44 76 75 113 86 102 2 -1 -36 -62 -83 -134z m-428 102 l82 -17 21 -48 c20 -46 20 -49 4 -148 -10 -55 -21 -100 -26 -100 -4 0 -8 5 -8 12 0 6 -38 78 -85 160 -47 82 -85 151 -85 154 0 6 9 5 97 -13z m443 11 c0 -7 -156 -284 -174 -309 -12 -16 -14 -10 -25 59 -15 104 -14 149 5 189 15 31 23 35 88 49 80 18 106 21 106 12z m-240 -29 c0 -11 -24 -55 -31 -55 -4 0 -12 14 -18 30 -10 29 -9 30 20 30 16 0 29 -2 29 -5z m-11 -195 c6 -28 11 -53 11 -55 0 -7 -45 -6 -52 0 -7 8 13 105 22 105 5 0 13 -23 19 -50z"
          />
        </g>

      </svg>

      <h1 class="nomeEtec">ETEC JORNALISTA ROBERTO MARINHO</h1>
      <h2 class="fraseEtec">ATRAVÉS DO CONHECIMENTO, CONQUISTA-SE O MUNDO</h2>

      <div class="icones">
        <a href="https://www.youtube.com/user/etecjrm253" rel="noopener" target="_blank">
          <svg class="youtube"
            xmlns="http://www.w3.org/2000/svg" 
            width="40"
            height="40"
            viewBox="0 0 576 512"
            fill="none"
            stroke="black"
            stroke-width="40"
            stroke-linecap="round"
            stroke-linejoin="round">
            <path 
            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class="">
            </path>
          </svg>
        </a>
        
        <a class="twitter" href="https://twitter.com/etecjrm253" rel="noopener" target="_blank">
          <svg class="twitter"
            xmlns="http://www.w3.org/2000/svg" 
            width="40" 
            height="40" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="1.5" 
            stroke-linecap="round" 
            stroke-linejoin="round">
            <path 
              d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
            </path>
          </svg>
        </a>
  
        <a href="https://www.instagram.com/etecjrm253/" rel="noopener" target="_blank">
          <svg class="instagram"
            xmlns="http://www.w3.org/2000/svg" 
            width="40" 
            height="40" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="1.5" 
            stroke-linecap="round" 
            stroke-linejoin="round" >
            <rect
              x="2" 
              y="2" 
              width="20" 
              height="20" 
              rx="5" 
              ry="5">
            </rect>
            <path 
              fill="transparent"
              d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
            </path>
            <line 
              x1="17.5" 
              y1="6.5" 
              x2="17.51" 
              y2="6.5">
            </line>
  
            <radialGradient id="rg" r="150%" cx="30%" cy="107%">
              <stop stop-color="#fdf497" offset="0" />
              <stop stop-color="#fdf497" offset="0.05" />
              <stop stop-color="#fd5949" offset="0.45" />
              <stop stop-color="#d6249f" offset="0.6" />
              <stop stop-color="#285AEB" offset="0.9" />
            </radialGradient>
          </svg>
        </a>
  
        <a href="https://www.facebook.com/etecjrm" rel="noopener" target="_blank">
          <svg class="facebook"
            xmlns="http://www.w3.org/2000/svg" 
            width="40" 
            height="40" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="1.5" 
            stroke-linecap="round" 
            stroke-linejoin="round">
            <path 
              d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
            </path>
          </svg>
        </a>
      </div>
      
      <div id="separador" class="quarto"></div>
    </div>
  </header>

  <main id="section">
    <div class="nomeSection">
      <h1>PROPÓSITO</h1>
    </div>

    <section>
      <div class="previnir-widget">
        <div class="top">
          <svg class="virus-escudo"
            xmlns="http://www.w3.org/2000/svg" 
            width="75" 
            height="75" 
            fill="#fff"
            viewBox="0 0 24 24">
            <path 
              d="M10.382 15.188c-.347.26-.769.401-1.202.401-.803 0-1.207-.981-.641-1.547.307-.307.702-.505 1.133-.566.811-.117 1.167-1.122.57-1.718-.596-.597-1.601-.24-1.718.571-.062.429-.261.827-.566 1.133-.569.568-1.548.164-1.548-.642 0-.435.141-.854.4-1.202.493-.656.032-1.618-.81-1.618s-1.303.961-.811 1.618c.259.347.4.769.4 1.202 0 .805-.979 1.21-1.548.641-.308-.307-.505-.702-.566-1.133-.117-.811-1.122-1.167-1.718-.571-.597.596-.24 1.601.57 1.718.428.062.826.26 1.133.566.569.569.165 1.547-.641 1.547-.435 0-.854-.14-1.202-.401-.655-.49-1.617-.029-1.617.813 0 .841.962 1.303 1.618.812.347-.26.769-.401 1.202-.401.805 0 1.21.978.641 1.547-.307.307-.702.505-1.133.566-.811.117-1.167 1.122-.57 1.718.596.597 1.601.24 1.718-.571.062-.429.261-.827.566-1.133.569-.568 1.548-.164 1.548.642 0 .435-.141.854-.4 1.202-.492.655-.034 1.618.81 1.618.839 0 1.306-.96.811-1.62-.26-.344-.4-.764-.4-1.195 0-.807.979-1.216 1.548-.647.308.308.505.703.566 1.134.117.811 1.122 1.167 1.718.571.596-.595.242-1.603-.572-1.718-.426-.061-.822-.258-1.127-.562-.572-.571-.169-1.551.637-1.551.435 0 .854.14 1.202.401.654.489 1.617.031 1.617-.813 0-.843-.963-1.303-1.618-.812zm-5.364 2.148c-.273 0-.495-.221-.495-.495 0-.273.222-.495.495-.495s.495.222.495.495c0 .274-.222.495-.495.495zm.63-1.571c-.429 0-.775-.348-.775-.776 0-.429.347-.777.775-.777s.777.348.777.777c.001.428-.348.776-.777.776zm1.464 1.484c-.363 0-.657-.294-.657-.657s.294-.658.657-.658.657.295.657.658-.293.657-.657.657zm16.888-14.249v11.535c0 4.603-3.203 5.804-9 9.465-1.318-.833-2.496-1.535-3.539-2.183.575-.481.894-1.055 1.021-1.726.731.456 1.564.962 2.519 1.551 5.313-3.281 7-4.065 7-7.107v-9.575c-2.446-.124-4.5-.611-7-2.416-2.5 1.805-4.554 2.292-7 2.416v3.806c-.541-.484-1.244-.766-2.001-.766v-5c3.516 0 5.629-.134 9-3 3.371 2.866 5.484 3 9 3zm-4 11.535c0 1.606-.415 1.935-5 4.76v-14.353c1.827 1.105 3.474 1.6 5 1.833v7.76z"/>
          </svg>
          <h1>Previna-se<br>Fique em casa.<br>Use máscara.</h1>   
        </div>
      </div>

      <hr id="separador">

        <h1>HISTÓRIA</h1>
        <p>Desde 01 de Agosto de 2011, a cidade de São Paulo e a sua região metropolitana ganha a Escola Técnica Estadual 
            Jornalista Roberto Marinho (Etec JRM), fruto de convênio entre o Governo do Estado de São Paulo, Fundação 
            Roberto Marinho e TV Globo. A Etec JRM passa a integrar ao Centro Estadual de Educação Tecnológica Paula Souza
             – maior instituição de Educação Profissional do Pais. Os cursos – Multimidia (duração de três semestres) e 
             Produção de Áudio e Vídeo (duração de quatro semestres) - foram elaborados por especialistas do Centro Paula 
             Souza em parceria com profissionais da Globo. Caberá ao Paula Souza o acompanhamento do processo seletivo, a 
             contratação de professores, a compra de mobiliário e equipamentos e a infraestrutura para o funcionamento dos 
             cursos. O prédio da nova Etec foi construído pela Globo, em terreno cedido pelo governo estadual. Coube também 
             à empresa a implementação do projeto de paisagismo na área da escola. O Centro Paula Souza ficou responsável 
             pelo acompanhamento do processo seletivo dos estudantes, pela contratação de professores, compra de mobiliário 
             e equipamentos e pela infraestrutura para o funcionamento dos cursos e sua manutenção. Além das aulas teóricas 
             realizadas em uma das 06 salas de aulas, as atividades práticas dos quatro cursos acontecem em um dos 05 laboratórios 
             de Informática, sendo dois deles compostos com 25 Macintosh de última geração e também no estúdio de áudio e 
             vídeo em fase de montagem nas dependências da Etec.
        </p>

        <h1>MISSÃO</h1>
        <p>Promover a educação profissional pública de excelência, nas área de produção cultural e design, visando ao atendimento 
            das demandas sociais e do mundo do trabalho na área em questão.
        </p>

        <h1>VISÃO</h1>
        <p>Consolidar-se como Unidade de Ensino de excelência e estímulo ao desenvolvimento humano e tecnológico, tendo como princípio 
            a utilização dos meios de comunicação em sua mais alta performance e eficiência.
        </p>
    </section>
  </main>

  <footer>
    <section>
      <div class="contato">
        <header>
          <svg class="iconeContato"
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 576 512" 
          width="40px"
          height="40px">
          <path 
            fill="var(--orange)" 
            d="M512 160h-96V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64v160c0 35.3 28.7 64 64 64h32v52c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4l76.9-43.5V384c0 35.3 28.7 64 64 64h96l108.9 61.6c2.2 1.6 4.7 2.4 7.1 2.4 6.2 0 12-4.9 12-12v-52h32c35.3 0 64-28.7 64-64V224c0-35.3-28.7-64-64-64zM64 256c-17.6 0-32-14.4-32-32V64c0-17.6 14.4-32 32-32h288c17.6 0 32 14.4 32 32v160c0 17.6-14.4 32-32 32H215.6l-7.3 4.2-80.3 45.4V256zm480 128c0 17.6-14.4 32-32 32h-64v49.6l-80.2-45.4-7.3-4.2H256c-17.6 0-32-14.4-32-32v-96h128c35.3 0 64-28.7 64-64v-32h96c17.6 0 32 14.4 32 32z"
          >
          </path>
          </svg>
          
          <h1>CONTATO</h1>
        </header>

        <p><strong>Email:</strong> <a href="mailto:e253dir@cps.sp.gov.br" rel="noopener">mandar email</a></p>
        <p><strong>Telefone:</strong> 5103-2085</p>
      </div>

      <div class="endereco">
        <header>
          <svg class="iconeEndereco"
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 576 512" 
          height="40"
          width="40">
          <path
            fill="var(--orange)" 
            d="M541 229.16l-61-49.83v-77.4a6 6 0 0 0-6-6h-20a6 6 0 0 0-6 6v51.33L308.19 39.14a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"
          >
          </path>
          </svg>

        <h1>ENDEREÇO</h1>
        </header>
        <p>ETEC Jornalista Roberto Marinho</p>
        <p>Avenida Chucri Zaidan, 40</p>
        <p>Brooklin Novo</p>
        <p>São Paulo / SP</p>
        <p><strong>CEP:</strong> 04583-110</p>
      </div>

      <div class="social">
        <header>
          <svg class="iconeSocial"
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 448 512"
          height="40"
          width="40">
          <path 
            fill="var(--orange)" 
            d="M352 320c-28.6 0-54.2 12.5-71.8 32.3l-95.5-59.7c9.6-23.4 9.7-49.8 0-73.2l95.5-59.7c17.6 19.8 43.2 32.3 71.8 32.3 53 0 96-43 96-96S405 0 352 0s-96 43-96 96c0 13 2.6 25.3 7.2 36.6l-95.5 59.7C150.2 172.5 124.6 160 96 160c-53 0-96 43-96 96s43 96 96 96c28.6 0 54.2-12.5 71.8-32.3l95.5 59.7c-4.7 11.3-7.2 23.6-7.2 36.6 0 53 43 96 96 96s96-43 96-96c-.1-53-43.1-96-96.1-96zm0-288c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM96 320c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64zm256 160c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64z" 
          >
          </path>
          </svg>
          <h1>REDES SOCIAIS</h1>
        </header>

        <div class="icones">
          <a href="https://www.youtube.com/user/etecjrm253" rel="noopener" target="_blank">
            <svg class="youtube"
              xmlns="http://www.w3.org/2000/svg" 
              width="36"
              height="36"
              viewBox="0 0 576 512"
              fill="none"
              stroke="black"
              stroke-width="40"
              stroke-linecap="round"
              stroke-linejoin="round">
              <path 
              d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class="">
              </path>
            </svg>
          </a>
          
          <a href="https://twitter.com/etecjrm253" rel="noopener" target="_blank">
            <svg class="twitter"
              xmlns="http://www.w3.org/2000/svg" 
              width="36" 
              height="36" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="1.5" 
              stroke-linecap="round" 
              stroke-linejoin="round">
              <path 
                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
              </path>
            </svg>
          </a>
    
          <a href="https://www.instagram.com/etecjrm253/" rel="noopener" target="_blank">
            <svg class="instagram"
              xmlns="http://www.w3.org/2000/svg" 
              width="36" 
              height="36" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="1.5" 
              stroke-linecap="round" 
              stroke-linejoin="round" >
              <rect
                x="2" 
                y="2" 
                width="20" 
                height="20" 
                rx="5" 
                ry="5">
              </rect>
              <path 
                fill="transparent"
                d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
              </path>
              <line 
                x1="17.5" 
                y1="6.5" 
                x2="17.51" 
                y2="6.5">
              </line>
    
              <radialGradient id="rg" r="150%" cx="30%" cy="107%">
                <stop stop-color="#fdf497" offset="0" />
                <stop stop-color="#fdf497" offset="0.05" />
                <stop stop-color="#fd5949" offset="0.45" />
                <stop stop-color="#d6249f" offset="0.6" />
                <stop stop-color="#285AEB" offset="0.9" />
              </radialGradient>
            </svg>
          </a>
    
          <a href="https://www.facebook.com/etecjrm" rel="noopener" target="_blank">
            <svg class="facebook"
              xmlns="http://www.w3.org/2000/svg" 
              width="36" 
              height="36" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="1.5" 
              stroke-linecap="round" 
              stroke-linejoin="round">
              <path 
                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
              </path>
            </svg>
          </a>
        </div>
      </div>

    </section>

    <div class="direitosAutorais">
      <div id="separador" class="quinto"></div>
      <h1>&copy;2020 ETEC JORNALISTA ROBERTO MARINHO. TODOS DIREITOS RESERVADOS</h1>
    </div>
  </footer>
</body>

</html>