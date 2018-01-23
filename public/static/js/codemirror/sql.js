





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://assets-cdn.github.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/frameworks-98cac35b43fab8341490a2623fdaa7b696bbaea87bccf8f485fd5cdb4996cd9b52bdb24709fb3bab0a0dcff4a29187d65028ee693d609ce5c0c3283c77a247a9.css" integrity="sha512-mMrDW0P6uDQUkKJiP9qntpa7rqh7zPj0hf1c20mWzZtSvbJHCfs7qwoNz/SikYfWUCjuaT1gnOXAwyg8d6JHqQ==" media="all" rel="stylesheet" />
  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-43f2ca865e53ef770583cfe9436726ee283df61c9f948a68ba1f6d9ce7a3030585e91b64da11f6fcfeca869b5fa4e8ed99a3b69bdc6d24cc2454a1cee6f386a5.css" integrity="sha512-Q/LKhl5T73cFg8/pQ2cm7ig99hyflIpouh9tnOejAwWF6Rtk2hH2/P7KhptfpOjtmaO2m9xtJMwkVKHO5vOGpQ==" media="all" rel="stylesheet" />
  
  
  
  

  <meta name="viewport" content="width=device-width">
  
  <title>CodeMirror/sql.js at master · codemirror/CodeMirror</title>
  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    
    <meta content="https://avatars0.githubusercontent.com/u/8876537?s=400&amp;v=4" property="og:image" /><meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="codemirror/CodeMirror" property="og:title" /><meta content="https://github.com/codemirror/CodeMirror" property="og:url" /><meta content="CodeMirror - In-browser code editor" property="og:description" />

  <link rel="assets" href="https://assets-cdn.github.com/">
  <link rel="web-socket" href="wss://live.github.com/_sockets/VjI6MjM0NjgyOTM5OjNjMzFjMTViMDU1MGQ4OWE4Njg1YWMwNGNlYWZlM2IwNWU4MTM1YjZlOTJjYTMyMTY4Mzg2OGRjNGI0ZWFmNzg=--96e3804f0580cf483a600d589328e778b42543d2">
  <meta name="pjax-timeout" content="1000">
  <link rel="sudo-modal" href="/sessions/sudo_modal">
  <meta name="request-id" content="B29E:92DC:3F53D54:5DF3B39:5A66A5C2" data-pjax-transient>
  

  <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
  <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
  <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="https://collector.githubapp.com/github-external/browser_event" name="octolytics-event-url" /><meta content="B29E:92DC:3F53D54:5DF3B39:5A66A5C2" name="octolytics-dimension-request_id" /><meta content="sea" name="octolytics-dimension-region_edge" /><meta content="iad" name="octolytics-dimension-region_render" /><meta content="26532291" name="octolytics-actor-id" /><meta content="huangxuhui1993" name="octolytics-actor-login" /><meta content="7f6e11815a1d3ce6f8386664747737021ed57a61f3e02bd6be363861aa81e7ec" name="octolytics-actor-hash" />
<meta content="https://github.com/hydro_browser_events" name="hydro-events-url" />
<meta content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" name="analytics-location" />




  <meta class="js-ga-set" name="dimension1" content="Logged In">


  

      <meta name="hostname" content="github.com">
  <meta name="user-login" content="huangxuhui1993">

      <meta name="expected-hostname" content="github.com">
    <meta name="js-proxy-site-detection-payload" content="ZjYwNmZjZWMyNWNiOTc3YjFjY2Q2MmNkYzI0NDNjNDYxYjU3ODIxODc5N2Y3MGFlMzAyOTYyOWRhNDM2OTFlNHx7InJlbW90ZV9hZGRyZXNzIjoiMTE3LjIzLjgyLjEwNSIsInJlcXVlc3RfaWQiOiJCMjlFOjkyREM6M0Y1M0Q1NDo1REYzQjM5OjVBNjZBNUMyIiwidGltZXN0YW1wIjoxNTE2Njc2NTUxLCJob3N0IjoiZ2l0aHViLmNvbSJ9">

    <meta name="enabled-features" content="UNIVERSE_BANNER,FREE_TRIALS">

  <meta name="html-safe-nonce" content="88e80c094f5d9db8f867032e31b842da76c2bfeb">

  <meta http-equiv="x-pjax-version" content="88585b0e4871bc1a5b2ad331c451bb7a">
  

      <link href="https://github.com/codemirror/CodeMirror/commits/master.atom" rel="alternate" title="Recent Commits to CodeMirror:master" type="application/atom+xml">

  <meta name="description" content="CodeMirror - In-browser code editor">
  <meta name="go-import" content="github.com/codemirror/CodeMirror git https://github.com/codemirror/CodeMirror.git">

  <meta content="8876537" name="octolytics-dimension-user_id" /><meta content="codemirror" name="octolytics-dimension-user_login" /><meta content="1254497" name="octolytics-dimension-repository_id" /><meta content="codemirror/CodeMirror" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="1254497" name="octolytics-dimension-repository_network_root_id" /><meta content="codemirror/CodeMirror" name="octolytics-dimension-repository_network_root_nwo" /><meta content="false" name="octolytics-dimension-repository_explore_github_marketplace_ci_cta_shown" />


    <link rel="canonical" href="https://github.com/codemirror/CodeMirror/blob/master/mode/sql/sql.js" data-pjax-transient>


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://assets-cdn.github.com/favicon.ico">

<meta name="theme-color" content="#1e2327">


  <meta name="u2f-support" content="true">

  </head>

  <body class="logged-in env-production page-blob">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="bg-black text-white p-3 show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    



        
<header class="Header  f5" role="banner">
  <div class="d-flex px-3 flex-justify-between container-lg">
    <div class="d-flex flex-justify-between">
      <a class="header-logo-invertocat" href="https://github.com/" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
  <svg aria-hidden="true" class="octicon octicon-mark-github" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>


    </div>

    <div class="HeaderMenu d-flex flex-justify-between flex-auto">
      <div class="d-flex">
            <div class="">
              <div class="header-search scoped-search site-scoped-search js-site-search" role="search">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/codemirror/CodeMirror/search" class="js-site-search-form" data-scoped-search-url="/codemirror/CodeMirror/search" data-unscoped-search-url="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <label class="form-control header-search-wrapper js-chromeless-input-container">
        <a href="/codemirror/CodeMirror/blob/master/mode/sql/sql.js" class="header-search-scope no-underline">This repository</a>
      <input type="text"
        class="form-control header-search-input js-site-search-focus js-site-search-field is-clearable"
        data-hotkey="s"
        name="q"
        value=""
        placeholder="Search"
        aria-label="Search this repository"
        data-unscoped-placeholder="Search GitHub"
        data-scoped-placeholder="Search"
        autocapitalize="off">
        <input type="hidden" class="js-site-search-type-field" name="type" >
    </label>
</form></div>

            </div>

          <ul class="d-flex pl-2 flex-items-center text-bold list-style-none" role="navigation">
            <li>
              <a href="/pulls" aria-label="Pull requests you created" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:pulls context:user" data-hotkey="g p" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls">
                Pull requests
</a>            </li>
            <li>
              <a href="/issues" aria-label="Issues you created" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:issues context:user" data-hotkey="g i" data-selected-links="/issues /issues/assigned /issues/mentioned /issues">
                Issues
</a>            </li>
                <li>
                  <a href="/marketplace" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:marketplace context:user" data-selected-links=" /marketplace">
                    Marketplace
</a>                </li>
            <li>
              <a href="/explore" class="js-selected-navigation-item HeaderNavlink px-2" data-ga-click="Header, click, Nav menu - item:explore" data-selected-links="/explore /trending /trending/developers /integrations /integrations/feature/code /integrations/feature/collaborate /integrations/feature/ship showcases showcases_search showcases_landing /explore">
                Explore
</a>            </li>
          </ul>
      </div>

      <div class="d-flex">
        
<ul class="user-nav d-flex flex-items-center list-style-none" id="user-links">
  <li class="dropdown js-menu-container">
    <span class="d-inline-block  px-2">
      

    </span>
  </li>

  <li class="dropdown js-menu-container">
    <details class="dropdown-details details-reset js-dropdown-details d-flex px-2 flex-items-center">
      <summary class="HeaderNavlink"
         aria-label="Create new…"
         data-ga-click="Header, create new, icon:add">
        <svg aria-hidden="true" class="octicon octicon-plus float-left mr-1 mt-1" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"/></svg>
        <span class="dropdown-caret mt-1"></span>
      </summary>

      <ul class="dropdown-menu dropdown-menu-sw">
        
<a class="dropdown-item" href="/new" data-ga-click="Header, create new repository">
  New repository
</a>

  <a class="dropdown-item" href="/new/import" data-ga-click="Header, import a repository">
    Import repository
  </a>

<a class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, create new gist">
  New gist
</a>

  <a class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>



  <div class="dropdown-divider"></div>
  <div class="dropdown-header">
    <span title="codemirror/CodeMirror">This repository</span>
  </div>
    <a class="dropdown-item" href="/codemirror/CodeMirror/issues/new" data-ga-click="Header, create new issue">
      New issue
    </a>

      </ul>
    </details>
  </li>

  <li class="dropdown js-menu-container">

    <details class="dropdown-details details-reset js-dropdown-details d-flex pl-2 flex-items-center">
      <summary class="HeaderNavlink name mt-1"
        aria-label="View profile and more"
        data-ga-click="Header, show menu, icon:avatar">
        <img alt="@huangxuhui1993" class="avatar float-left mr-1" src="https://avatars1.githubusercontent.com/u/26532291?s=40&amp;v=4" height="20" width="20">
        <span class="dropdown-caret"></span>
      </summary>

      <ul class="dropdown-menu dropdown-menu-sw">
        <li class="dropdown-header header-nav-current-user css-truncate">
          Signed in as <strong class="css-truncate-target">huangxuhui1993</strong>
        </li>

        <li class="dropdown-divider"></li>

        <li><a class="dropdown-item" href="/huangxuhui1993" data-ga-click="Header, go to profile, text:your profile">
          Your profile
        </a></li>
        <li><a class="dropdown-item" href="/huangxuhui1993?tab=stars" data-ga-click="Header, go to starred repos, text:your stars">
          Your stars
        </a></li>
          <li><a class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, your gists, text:your gists">Your Gists</a></li>

        <li class="dropdown-divider"></li>

        <li><a class="dropdown-item" href="https://help.github.com" data-ga-click="Header, go to help, text:help">
          Help
        </a></li>

        <li><a class="dropdown-item" href="/settings/profile" data-ga-click="Header, go to settings, icon:settings">
          Settings
        </a></li>

        <li><!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/logout" class="logout-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="6z86oRhP0aZXIdfX2TMWam1pWwG75ybpgP6Lrqt5Cdr31RVPu5Q39IDpDx2m4iCSnY5WQnHcZEjTKLfyYCOzFg==" /></div>
          <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
        </form></li>
      </ul>
    </details>
  </li>
</ul>


        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/logout" class="sr-only right-0" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="dOmP7z9i5QuxZ0MtaZ6tauzG2THm0ascXjHc4TBvIbJoA6ABnLkDWWavm+cWT5uSHCHUcizq6b0N5+C9+zWbfg==" /></div>
          <button type="submit" class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
            Sign out
          </button>
</form>      </div>
    </div>
  </div>
</header>

      

  </div>

  <div id="start-of-content" class="show-on-focus"></div>

    <div id="js-flash-container">
</div>



  <div role="main" class="application-main ">
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode" class="">
    <div id="js-repo-pjax-container" data-pjax-container >
      




  



  <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav  ">
    <div class="repohead-details-container clearfix container">

      <ul class="pagehead-actions">
  <li>
        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ZPwqopw1g9f/JN+st9UVca5S3kUflGHnxDSP+zx2i2LKNxwBKR4OnT+nLPXNtX/DWSbzvzEzmb6ix4S6/Tm6jA==" /></div>      <input class="form-control" id="repository_id" name="repository_id" type="hidden" value="1254497" />

        <div class="select-menu js-menu-container js-select-menu">
          <a href="/codemirror/CodeMirror/subscription"
            class="btn btn-sm btn-with-count select-menu-button js-menu-target"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
            aria-label="Toggle repository notifications menu"
            data-ga-click="Repository, click Watch settings, action:blob#show">
            <span class="js-select-button">
                <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                Watch
            </span>
          </a>
          <a class="social-count js-social-count"
            href="/codemirror/CodeMirror/watchers"
            aria-label="597 users are watching this repository">
            597
          </a>

        <div class="select-menu-modal-holder">
          <div class="select-menu-modal subscription-menu-modal js-menu-content">
            <div class="select-menu-header js-navigation-enable" tabindex="-1">
              <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
              <span class="select-menu-title">Notifications</span>
            </div>

              <div class="select-menu-list js-navigation-container" role="menu">

                <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                    <span class="select-menu-item-heading">Not watching</span>
                    <span class="description">Be notified when participating or @mentioned.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                      Watch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                    <span class="select-menu-item-heading">Watching</span>
                    <span class="description">Be notified of all conversations.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
                        Unwatch
                    </span>
                  </div>
                </div>

                <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
                  <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
                  <div class="select-menu-item-text">
                    <input id="do_ignore" name="do" type="radio" value="ignore" />
                    <span class="select-menu-item-heading">Ignoring</span>
                    <span class="description">Never be notified.</span>
                    <span class="js-select-button-text hidden-select-button-text">
                      <svg aria-hidden="true" class="octicon octicon-mute" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8 2.81v10.38c0 .67-.81 1-1.28.53L3 10H1c-.55 0-1-.45-1-1V7c0-.55.45-1 1-1h2l3.72-3.72C7.19 1.81 8 2.14 8 2.81zm7.53 3.22l-1.06-1.06-1.97 1.97-1.97-1.97-1.06 1.06L11.44 8 9.47 9.97l1.06 1.06 1.97-1.97 1.97 1.97 1.06-1.06L13.56 8l1.97-1.97z"/></svg>
                        Stop ignoring
                    </span>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
</form>
  </li>

  <li>
    
  <div class="js-toggler-container js-social-container starring-container ">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/codemirror/CodeMirror/unstar" class="starred js-social-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="5jkWd7j1d8yRVDV/fTxr96eHsAA1f2lJ1C/ycrvdHEt+MUitA/hLHvtJCCIP/OqHiW+zt8OMC3vNjXzTkQMWBA==" /></div>
      <input type="hidden" name="context" value="repository"></input>
      <button
        type="submit"
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Unstar this repository" title="Unstar codemirror/CodeMirror"
        data-ga-click="Repository, click unstar button, action:blob#show; text:Unstar">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
        Unstar
      </button>
        <a class="social-count js-social-count" href="/codemirror/CodeMirror/stargazers"
           aria-label="13745 users starred this repository">
          13,745
        </a>
</form>
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/codemirror/CodeMirror/star" class="unstarred js-social-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="Z9UHtfUCPqU8rCliEQ3iQub8/pzWKIIj7cQCo9I6ICKrE4rJf70nqtz2xCDrJucKGjcP2OHrdoGCNW66OKaD+Q==" /></div>
      <input type="hidden" name="context" value="repository"></input>
      <button
        type="submit"
        class="btn btn-sm btn-with-count js-toggler-target"
        aria-label="Star this repository" title="Star codemirror/CodeMirror"
        data-ga-click="Repository, click star button, action:blob#show; text:Star">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
        Star
      </button>
        <a class="social-count js-social-count" href="/codemirror/CodeMirror/stargazers"
           aria-label="13745 users starred this repository">
          13,745
        </a>
</form>  </div>

  </li>

  <li>
          <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/codemirror/CodeMirror/fork" class="btn-with-count" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="N06zchBnUhAvdYaTo/rhoHWu5KKGNPGRzhDB7bULf+vRLStRoBdI8onLUo5obAudPzttpiz6lVvB4Bf9zKuOYg==" /></div>
            <button
                type="submit"
                class="btn btn-sm btn-with-count"
                data-ga-click="Repository, show fork modal, action:blob#show; text:Fork"
                title="Fork your own copy of codemirror/CodeMirror to your account"
                aria-label="Fork your own copy of codemirror/CodeMirror to your account">
              <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
              Fork
            </button>
</form>
    <a href="/codemirror/CodeMirror/network" class="social-count"
       aria-label="3259 users forked this repository">
      3,259
    </a>
  </li>
</ul>

      <h1 class="public ">
  <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
  <span class="author" itemprop="author"><a href="/codemirror" class="url fn" rel="author">codemirror</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a href="/codemirror/CodeMirror" data-pjax="#js-repo-pjax-container">CodeMirror</a></strong>

</h1>

    </div>
    
<nav class="reponav js-repo-nav js-sidenav-container-pjax container"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/codemirror/CodeMirror" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /codemirror/CodeMirror" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a href="/codemirror/CodeMirror/issues" class="js-selected-navigation-item reponav-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /codemirror/CodeMirror/issues" itemprop="url">
        <svg aria-hidden="true" class="octicon octicon-issue-opened" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"/></svg>
        <span itemprop="name">Issues</span>
        <span class="Counter">221</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/codemirror/CodeMirror/pulls" class="js-selected-navigation-item reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /codemirror/CodeMirror/pulls" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-git-pull-request" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
      <span itemprop="name">Pull requests</span>
      <span class="Counter">13</span>
      <meta itemprop="position" content="3">
</a>  </span>

    <a href="/codemirror/CodeMirror/projects" class="js-selected-navigation-item reponav-item" data-hotkey="g b" data-selected-links="repo_projects new_repo_project repo_project /codemirror/CodeMirror/projects">
      <svg aria-hidden="true" class="octicon octicon-project" height="16" version="1.1" viewBox="0 0 15 16" width="15"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      Projects
      <span class="Counter" >0</span>
</a>
    <a href="/codemirror/CodeMirror/wiki" class="js-selected-navigation-item reponav-item" data-hotkey="g w" data-selected-links="repo_wiki /codemirror/CodeMirror/wiki">
      <svg aria-hidden="true" class="octicon octicon-book" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"/></svg>
      Wiki
</a>

  <a href="/codemirror/CodeMirror/pulse" class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors dependency_graph pulse /codemirror/CodeMirror/pulse">
    <svg aria-hidden="true" class="octicon octicon-graph" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"/></svg>
    Insights
</a>

</nav>


  </div>

<div class="container new-discussion-timeline experiment-repo-nav  ">
  <div class="repository-content ">

    
  <a href="/codemirror/CodeMirror/blob/d0dca6532dd668cf415b2740152b93d1cb454410/mode/sql/sql.js" class="d-none js-permalink-shortcut" data-hotkey="y">Permalink</a>

  <!-- blob contrib key: blob_contributors:v21:f92b59e01e06e9e85745136ac8d5841f -->

  <div class="file-navigation js-zeroclipboard-container">
    
<div class="select-menu branch-select-menu js-menu-container js-select-menu float-left">
  <button class=" btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    
    type="button" aria-label="Switch branches or tags" aria-expanded="false" aria-haspopup="true">
      <i>Branch:</i>
      <span class="js-select-button css-truncate-target">master</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="form-control js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/codemirror/CodeMirror/blob/coordsCharRtlPerf/mode/sql/sql.js"
               data-name="coordsCharRtlPerf"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                coordsCharRtlPerf
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/codemirror/CodeMirror/blob/direction/mode/sql/sql.js"
               data-name="direction"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                direction
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/codemirror/CodeMirror/blob/master/mode/sql/sql.js"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                master
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/codemirror/CodeMirror/blob/rtlMode/mode/sql/sql.js"
               data-name="rtlMode"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                rtlMode
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/codemirror/CodeMirror/blob/v2/mode/sql/sql.js"
               data-name="v2"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                v2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/codemirror/CodeMirror/blob/v3/mode/sql/sql.js"
               data-name="v3"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                v3
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v4_beta2/mode/sql/sql.js"
              data-name="v4_beta2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v4_beta2">
                v4_beta2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v4_beta1/mode/sql/sql.js"
              data-name="v4_beta1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v4_beta1">
                v4_beta1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.12/mode/sql/sql.js"
              data-name="v3.12"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.12">
                v3.12
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.11/mode/sql/sql.js"
              data-name="v3.11"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.11">
                v3.11
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.02/mode/sql/sql.js"
              data-name="v3.02"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.02">
                v3.02
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.01/mode/sql/sql.js"
              data-name="v3.01"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.01">
                v3.01
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.1/mode/sql/sql.js"
              data-name="v3.1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.1">
                v3.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.0/mode/sql/sql.js"
              data-name="v3.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.0">
                v3.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.0rc2/mode/sql/sql.js"
              data-name="v3.0rc2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.0rc2">
                v3.0rc2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.0rc1/mode/sql/sql.js"
              data-name="v3.0rc1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.0rc1">
                v3.0rc1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.0beta2/mode/sql/sql.js"
              data-name="v3.0beta2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.0beta2">
                v3.0beta2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v3.0beta1/mode/sql/sql.js"
              data-name="v3.0beta1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v3.0beta1">
                v3.0beta1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.38/mode/sql/sql.js"
              data-name="v2.38"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.38">
                v2.38
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.37/mode/sql/sql.js"
              data-name="v2.37"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.37">
                v2.37
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.36/mode/sql/sql.js"
              data-name="v2.36"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.36">
                v2.36
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.35/mode/sql/sql.js"
              data-name="v2.35"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.35">
                v2.35
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.34/mode/sql/sql.js"
              data-name="v2.34"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.34">
                v2.34
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.33/mode/sql/sql.js"
              data-name="v2.33"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.33">
                v2.33
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.32/mode/sql/sql.js"
              data-name="v2.32"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.32">
                v2.32
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.31/mode/sql/sql.js"
              data-name="v2.31"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.31">
                v2.31
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.25/mode/sql/sql.js"
              data-name="v2.25"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.25">
                v2.25
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.24/mode/sql/sql.js"
              data-name="v2.24"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.24">
                v2.24
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.23/mode/sql/sql.js"
              data-name="v2.23"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.23">
                v2.23
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.22/mode/sql/sql.js"
              data-name="v2.22"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.22">
                v2.22
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.21/mode/sql/sql.js"
              data-name="v2.21"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.21">
                v2.21
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.18/mode/sql/sql.js"
              data-name="v2.18"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.18">
                v2.18
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.17/mode/sql/sql.js"
              data-name="v2.17"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.17">
                v2.17
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.16/mode/sql/sql.js"
              data-name="v2.16"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.16">
                v2.16
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.15/mode/sql/sql.js"
              data-name="v2.15"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.15">
                v2.15
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.14/mode/sql/sql.js"
              data-name="v2.14"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.14">
                v2.14
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.13/mode/sql/sql.js"
              data-name="v2.13"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.13">
                v2.13
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.12/mode/sql/sql.js"
              data-name="v2.12"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.12">
                v2.12
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.11/mode/sql/sql.js"
              data-name="v2.11"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.11">
                v2.11
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.3/mode/sql/sql.js"
              data-name="v2.3"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.3">
                v2.3
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.02/mode/sql/sql.js"
              data-name="v2.02"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.02">
                v2.02
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.2/mode/sql/sql.js"
              data-name="v2.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.2">
                v2.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.01/mode/sql/sql.js"
              data-name="v2.01"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.01">
                v2.01
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.1/mode/sql/sql.js"
              data-name="v2.1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.1">
                v2.1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/v2.0/mode/sql/sql.js"
              data-name="v2.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="v2.0">
                v2.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/beta2/mode/sql/sql.js"
              data-name="beta2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="beta2">
                beta2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/beta1/mode/sql/sql.js"
              data-name="beta1"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="beta1">
                beta1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.33.0/mode/sql/sql.js"
              data-name="5.33.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.33.0">
                5.33.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.32.0/mode/sql/sql.js"
              data-name="5.32.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.32.0">
                5.32.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.31.0/mode/sql/sql.js"
              data-name="5.31.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.31.0">
                5.31.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.30.0/mode/sql/sql.js"
              data-name="5.30.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.30.0">
                5.30.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.29.0/mode/sql/sql.js"
              data-name="5.29.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.29.0">
                5.29.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.28.0/mode/sql/sql.js"
              data-name="5.28.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.28.0">
                5.28.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.27.4/mode/sql/sql.js"
              data-name="5.27.4"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.27.4">
                5.27.4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.27.2/mode/sql/sql.js"
              data-name="5.27.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.27.2">
                5.27.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.27.0/mode/sql/sql.js"
              data-name="5.27.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.27.0">
                5.27.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.26.0/mode/sql/sql.js"
              data-name="5.26.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.26.0">
                5.26.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.25.2/mode/sql/sql.js"
              data-name="5.25.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.25.2">
                5.25.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.25.0/mode/sql/sql.js"
              data-name="5.25.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.25.0">
                5.25.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.24.2/mode/sql/sql.js"
              data-name="5.24.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.24.2">
                5.24.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.24.0/mode/sql/sql.js"
              data-name="5.24.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.24.0">
                5.24.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.23.0/mode/sql/sql.js"
              data-name="5.23.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.23.0">
                5.23.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.22.2/mode/sql/sql.js"
              data-name="5.22.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.22.2">
                5.22.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.22.0/mode/sql/sql.js"
              data-name="5.22.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.22.0">
                5.22.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.21.0/mode/sql/sql.js"
              data-name="5.21.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.21.0">
                5.21.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.20.2/mode/sql/sql.js"
              data-name="5.20.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.20.2">
                5.20.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.20.0/mode/sql/sql.js"
              data-name="5.20.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.20.0">
                5.20.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.19.0/mode/sql/sql.js"
              data-name="5.19.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.19.0">
                5.19.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.18.2/mode/sql/sql.js"
              data-name="5.18.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.18.2">
                5.18.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.18.0/mode/sql/sql.js"
              data-name="5.18.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.18.0">
                5.18.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.17.0/mode/sql/sql.js"
              data-name="5.17.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.17.0">
                5.17.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.16.0/mode/sql/sql.js"
              data-name="5.16.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.16.0">
                5.16.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.15.2/mode/sql/sql.js"
              data-name="5.15.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.15.2">
                5.15.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.15.0/mode/sql/sql.js"
              data-name="5.15.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.15.0">
                5.15.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.14.2/mode/sql/sql.js"
              data-name="5.14.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.14.2">
                5.14.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.14.0/mode/sql/sql.js"
              data-name="5.14.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.14.0">
                5.14.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.13.4/mode/sql/sql.js"
              data-name="5.13.4"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.13.4">
                5.13.4
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.13.2/mode/sql/sql.js"
              data-name="5.13.2"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.13.2">
                5.13.2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.13.0/mode/sql/sql.js"
              data-name="5.13.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.13.0">
                5.13.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.12.0/mode/sql/sql.js"
              data-name="5.12.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.12.0">
                5.12.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.11.0/mode/sql/sql.js"
              data-name="5.11.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.11.0">
                5.11.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.10.0/mode/sql/sql.js"
              data-name="5.10.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.10.0">
                5.10.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.9.0/mode/sql/sql.js"
              data-name="5.9.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.9.0">
                5.9.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.8.0/mode/sql/sql.js"
              data-name="5.8.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.8.0">
                5.8.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.7.0/mode/sql/sql.js"
              data-name="5.7.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.7.0">
                5.7.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.6.0/mode/sql/sql.js"
              data-name="5.6.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.6.0">
                5.6.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.5.0/mode/sql/sql.js"
              data-name="5.5.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.5.0">
                5.5.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.4.0/mode/sql/sql.js"
              data-name="5.4.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.4.0">
                5.4.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.3.0/mode/sql/sql.js"
              data-name="5.3.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.3.0">
                5.3.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.2.0/mode/sql/sql.js"
              data-name="5.2.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.2.0">
                5.2.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.1.0/mode/sql/sql.js"
              data-name="5.1.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.1.0">
                5.1.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/5.0.0/mode/sql/sql.js"
              data-name="5.0.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="5.0.0">
                5.0.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.13.0/mode/sql/sql.js"
              data-name="4.13.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.13.0">
                4.13.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.12.0/mode/sql/sql.js"
              data-name="4.12.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.12.0">
                4.12.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.11.0/mode/sql/sql.js"
              data-name="4.11.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.11.0">
                4.11.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.10.0/mode/sql/sql.js"
              data-name="4.10.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.10.0">
                4.10.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.9.0/mode/sql/sql.js"
              data-name="4.9.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.9.0">
                4.9.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.8.0/mode/sql/sql.js"
              data-name="4.8.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.8.0">
                4.8.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.7.0/mode/sql/sql.js"
              data-name="4.7.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.7.0">
                4.7.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.6.0/mode/sql/sql.js"
              data-name="4.6.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.6.0">
                4.6.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.5.0/mode/sql/sql.js"
              data-name="4.5.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.5.0">
                4.5.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.4.0/mode/sql/sql.js"
              data-name="4.4.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.4.0">
                4.4.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.3.0/mode/sql/sql.js"
              data-name="4.3.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.3.0">
                4.3.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.2.0/mode/sql/sql.js"
              data-name="4.2.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.2.0">
                4.2.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.1.0/mode/sql/sql.js"
              data-name="4.1.0"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.1.0">
                4.1.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
              href="/codemirror/CodeMirror/tree/4.0.3/mode/sql/sql.js"
              data-name="4.0.3"
              data-skip-pjax="true"
              rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"/></svg>
              <span class="select-menu-item-text css-truncate-target" title="4.0.3">
                4.0.3
              </span>
            </a>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

    <div class="BtnGroup float-right">
      <a href="/codemirror/CodeMirror/find/master"
            class="js-pjax-capture-input btn btn-sm BtnGroup-item"
            data-pjax
            data-hotkey="t">
        Find file
      </a>
      <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm BtnGroup-item tooltipped tooltipped-s" data-copied-hint="Copied!" type="button">Copy path</button>
    </div>
    <div class="breadcrumb js-zeroclipboard-target">
      <span class="repo-root js-repo-root"><span class="js-path-segment"><a href="/codemirror/CodeMirror"><span>CodeMirror</span></a></span></span><span class="separator">/</span><span class="js-path-segment"><a href="/codemirror/CodeMirror/tree/master/mode"><span>mode</span></a></span><span class="separator">/</span><span class="js-path-segment"><a href="/codemirror/CodeMirror/tree/master/mode/sql"><span>sql</span></a></span><span class="separator">/</span><strong class="final-path">sql.js</strong>
    </div>
  </div>


  
  <div class="commit-tease">
      <span class="float-right">
        <a class="commit-tease-sha" href="/codemirror/CodeMirror/commit/d2798d22509e33f3aeb79bb7f7437ba0de4605bf" data-pjax>
          d2798d2
        </a>
        <relative-time datetime="2018-01-07T18:12:45Z">Jan 7, 2018</relative-time>
      </span>
      <div>
        <img alt="" class="avatar" data-canonical-src="https://2.gravatar.com/avatar/f35681e807a807fd8c97dc337afdf750?d=https%3A%2F%2Fassets-cdn.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png&amp;r=g&amp;s=140" height="20" src="https://camo.githubusercontent.com/c20f6058b03341c437c93e1ee2e415190def8941/68747470733a2f2f322e67726176617461722e636f6d2f6176617461722f66333536383165383037613830376664386339376463333337616664663735303f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d6726733d313430" width="20" />
        <span class="user-mention">Neil Anderson</span>
          <a href="/codemirror/CodeMirror/commit/d2798d22509e33f3aeb79bb7f7437ba0de4605bf" class="message" data-pjax="true" title="[sql mode] Include LC_CTYPE and LC_COLLATE keywords in x-pgsql

The CREATE DATABASE command supports LC_CTYPE and LC_COLLATE keywords as
per https://www.postgresql.org/docs/10/static/sql-createdatabase.html.
This commit adds them to the postgres sql mode.">[sql mode] Include LC_CTYPE and LC_COLLATE keywords in x-pgsql</a>
      </div>

    <div class="commit-tease-contributors">
      <button type="button" class="btn-link muted-link contributors-toggle" data-facebox="#blob_contributors_box">
        <strong>19</strong>
         contributors
      </button>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="marijnh" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=marijnh"><img alt="@marijnh" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/144427?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="santec" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=santec"><img alt="@santec" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/497022?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="peterkroon" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=peterkroon"><img alt="@peterkroon" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/516669?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="garysheng" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=garysheng"><img alt="@garysheng" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/3489414?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="whitelynx" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=whitelynx"><img alt="@whitelynx" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/285264?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="zerkms" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=zerkms"><img alt="@zerkms" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/302295?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="cosinequanon" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=cosinequanon"><img alt="@cosinequanon" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/1226424?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="Paxa" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=Paxa"><img alt="@Paxa" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/26019?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="nagaozen" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=nagaozen"><img alt="@nagaozen" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/22817?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="mzabuawala" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=mzabuawala"><img alt="@mzabuawala" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/19573369?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="haskellcamargo" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=haskellcamargo"><img alt="@haskellcamargo" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/7553006?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="malayhm" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=malayhm"><img alt="@malayhm" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/1881135?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="madhuracj" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=madhuracj"><img alt="@madhuracj" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/1410004?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="luke-browning" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=luke-browning"><img alt="@luke-browning" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/7987168?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="jsoref" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=jsoref"><img alt="@jsoref" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/2119212?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="helfer" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=helfer"><img alt="@helfer" class="avatar" height="20" src="https://avatars1.githubusercontent.com/u/6569980?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="clohfink" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=clohfink"><img alt="@clohfink" class="avatar" height="20" src="https://avatars0.githubusercontent.com/u/1127460?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="Crisfole" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=Crisfole"><img alt="@Crisfole" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/413237?s=40&amp;v=4" width="20" /> </a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="antimatter15" href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js?author=antimatter15"><img alt="@antimatter15" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/30054?s=40&amp;v=4" width="20" /> </a>


    </div>

    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list" data-facebox-id="facebox-description">
          <li class="facebox-user-list-item">
            <img alt="@marijnh" height="24" src="https://avatars0.githubusercontent.com/u/144427?s=48&amp;v=4" width="24" />
            <a href="/marijnh">marijnh</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@santec" height="24" src="https://avatars1.githubusercontent.com/u/497022?s=48&amp;v=4" width="24" />
            <a href="/santec">santec</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@peterkroon" height="24" src="https://avatars3.githubusercontent.com/u/516669?s=48&amp;v=4" width="24" />
            <a href="/peterkroon">peterkroon</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@garysheng" height="24" src="https://avatars3.githubusercontent.com/u/3489414?s=48&amp;v=4" width="24" />
            <a href="/garysheng">garysheng</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@whitelynx" height="24" src="https://avatars0.githubusercontent.com/u/285264?s=48&amp;v=4" width="24" />
            <a href="/whitelynx">whitelynx</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@zerkms" height="24" src="https://avatars2.githubusercontent.com/u/302295?s=48&amp;v=4" width="24" />
            <a href="/zerkms">zerkms</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@cosinequanon" height="24" src="https://avatars1.githubusercontent.com/u/1226424?s=48&amp;v=4" width="24" />
            <a href="/cosinequanon">cosinequanon</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@Paxa" height="24" src="https://avatars2.githubusercontent.com/u/26019?s=48&amp;v=4" width="24" />
            <a href="/Paxa">Paxa</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@nagaozen" height="24" src="https://avatars1.githubusercontent.com/u/22817?s=48&amp;v=4" width="24" />
            <a href="/nagaozen">nagaozen</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@mzabuawala" height="24" src="https://avatars1.githubusercontent.com/u/19573369?s=48&amp;v=4" width="24" />
            <a href="/mzabuawala">mzabuawala</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@haskellcamargo" height="24" src="https://avatars3.githubusercontent.com/u/7553006?s=48&amp;v=4" width="24" />
            <a href="/haskellcamargo">haskellcamargo</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@malayhm" height="24" src="https://avatars2.githubusercontent.com/u/1881135?s=48&amp;v=4" width="24" />
            <a href="/malayhm">malayhm</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@madhuracj" height="24" src="https://avatars3.githubusercontent.com/u/1410004?s=48&amp;v=4" width="24" />
            <a href="/madhuracj">madhuracj</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@luke-browning" height="24" src="https://avatars1.githubusercontent.com/u/7987168?s=48&amp;v=4" width="24" />
            <a href="/luke-browning">luke-browning</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@jsoref" height="24" src="https://avatars2.githubusercontent.com/u/2119212?s=48&amp;v=4" width="24" />
            <a href="/jsoref">jsoref</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@helfer" height="24" src="https://avatars0.githubusercontent.com/u/6569980?s=48&amp;v=4" width="24" />
            <a href="/helfer">helfer</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@clohfink" height="24" src="https://avatars1.githubusercontent.com/u/1127460?s=48&amp;v=4" width="24" />
            <a href="/clohfink">clohfink</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@Crisfole" height="24" src="https://avatars2.githubusercontent.com/u/413237?s=48&amp;v=4" width="24" />
            <a href="/Crisfole">Crisfole</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="@antimatter15" height="24" src="https://avatars3.githubusercontent.com/u/30054?s=48&amp;v=4" width="24" />
            <a href="/antimatter15">antimatter15</a>
          </li>
      </ul>
    </div>
  </div>


  <div class="file">
    <div class="file-header">
  <div class="file-actions">

    <div class="BtnGroup">
      <a href="/codemirror/CodeMirror/raw/master/mode/sql/sql.js" class="btn btn-sm BtnGroup-item" id="raw-url">Raw</a>
        <a href="/codemirror/CodeMirror/blame/master/mode/sql/sql.js" class="btn btn-sm js-update-url-with-hash BtnGroup-item" data-hotkey="b">Blame</a>
      <a href="/codemirror/CodeMirror/commits/master/mode/sql/sql.js" class="btn btn-sm BtnGroup-item" rel="nofollow">History</a>
    </div>

        <a class="btn-octicon tooltipped tooltipped-nw"
           href="https://desktop.github.com"
           aria-label="Open this file in GitHub Desktop"
           data-ga-click="Repository, open with desktop, type:windows">
            <svg aria-hidden="true" class="octicon octicon-device-desktop" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M15 2H1c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5.34c-.25.61-.86 1.39-2.34 2h8c-1.48-.61-2.09-1.39-2.34-2H15c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm0 9H1V3h14v8z"/></svg>
        </a>

          <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/codemirror/CodeMirror/edit/master/mode/sql/sql.js" class="inline-form js-update-url-with-hash" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="XnvBjShZzGFO7ZVKy6aRH2gvvth9kTpmpsCIr6ltp/hXSagpnbo8RBv31LkpFqihyahjAUdKzxg3Xuk3vjSI2g==" /></div>
            <button class="btn-octicon tooltipped tooltipped-nw" type="submit"
              aria-label="Fork this project and edit the file" data-hotkey="e" data-disable-with>
              <svg aria-hidden="true" class="octicon octicon-pencil" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"/></svg>
            </button>
</form>
        <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/codemirror/CodeMirror/delete/master/mode/sql/sql.js" class="inline-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="+KTo5INQgXfvn2F6rbERcFy0mX6jAY3rYunuTOxh6E2HF1mfmte3K4Tz1zhPWEnxlGWYBdvJ4VYlMcD6BezpRQ==" /></div>
          <button class="btn-octicon btn-octicon-danger tooltipped tooltipped-nw" type="submit"
            aria-label="Fork this project and delete the file" data-disable-with>
            <svg aria-hidden="true" class="octicon octicon-trashcan" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M11 2H9c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1H2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1v9c0 .55.45 1 1 1h7c.55 0 1-.45 1-1V5c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 12H3V5h1v8h1V5h1v8h1V5h1v8h1V5h1v9zm1-10H2V3h9v1z"/></svg>
          </button>
</form>  </div>

  <div class="file-info">
      489 lines (448 sloc)
      <span class="file-info-divider"></span>
    44.1 KB
  </div>
</div>

    

  <div itemprop="text" class="blob-wrapper data type-javascript">
      <table class="highlight tab-size js-file-line-container" data-tab-size="2">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">//</span> CodeMirror, copyright (c) by Marijn Haverbeke and others</span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">//</span> Distributed under an MIT license: http://codemirror.net/LICENSE</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line">(<span class="pl-k">function</span>(<span class="pl-smi">mod</span>) {</td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">if</span> (<span class="pl-k">typeof</span> <span class="pl-c1">exports</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>object<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">typeof</span> <span class="pl-c1">module</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>object<span class="pl-pds">&quot;</span></span>) <span class="pl-c"><span class="pl-c">//</span> CommonJS</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">mod</span>(<span class="pl-c1">require</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>../../lib/codemirror<span class="pl-pds">&quot;</span></span>));</td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-k">typeof</span> define <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>function<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">define</span>.<span class="pl-smi">amd</span>) <span class="pl-c"><span class="pl-c">//</span> AMD</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">define</span>([<span class="pl-s"><span class="pl-pds">&quot;</span>../../lib/codemirror<span class="pl-pds">&quot;</span></span>], mod);</td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">else</span> <span class="pl-c"><span class="pl-c">//</span> Plain browser env</span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">mod</span>(CodeMirror);</td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line">})(<span class="pl-k">function</span>(<span class="pl-smi">CodeMirror</span>) {</td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-s"><span class="pl-pds">&quot;</span>use strict<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMode</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>, <span class="pl-k">function</span>(<span class="pl-smi">config</span>, <span class="pl-smi">parserConfig</span>) {</td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line">  <span class="pl-s"><span class="pl-pds">&quot;</span>use strict<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">var</span> client         <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">client</span> <span class="pl-k">||</span> {},</td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line">      atoms          <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">atoms</span> <span class="pl-k">||</span> {<span class="pl-s"><span class="pl-pds">&quot;</span>false<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-c1">true</span>, <span class="pl-s"><span class="pl-pds">&quot;</span>true<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-c1">true</span>, <span class="pl-s"><span class="pl-pds">&quot;</span>null<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span> <span class="pl-c1">true</span>},</td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line">      builtin        <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">builtin</span> <span class="pl-k">||</span> {},</td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line">      keywords       <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">keywords</span> <span class="pl-k">||</span> {},</td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line">      operatorChars  <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">operatorChars</span> <span class="pl-k">||</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=&amp;|~^]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line">      support        <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">support</span> <span class="pl-k">||</span> {},</td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line">      hooks          <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">hooks</span> <span class="pl-k">||</span> {},</td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line">      dateSQL        <span class="pl-k">=</span> <span class="pl-smi">parserConfig</span>.<span class="pl-smi">dateSQL</span> <span class="pl-k">||</span> {<span class="pl-s"><span class="pl-pds">&quot;</span>date<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-c1">true</span>, <span class="pl-s"><span class="pl-pds">&quot;</span>time<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-c1">true</span>, <span class="pl-s"><span class="pl-pds">&quot;</span>timestamp<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-c1">true</span>};</td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">tokenBase</span>(<span class="pl-smi">stream</span>, <span class="pl-smi">state</span>) {</td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> ch <span class="pl-k">=</span> <span class="pl-smi">stream</span>.<span class="pl-c1">next</span>();</td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> call hooks from the mime type</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (hooks[ch]) {</td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> result <span class="pl-k">=</span> hooks[ch](stream, state);</td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (result <span class="pl-k">!==</span> <span class="pl-c1">false</span>) <span class="pl-k">return</span> result;</td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-smi">support</span>.<span class="pl-smi">hexNumber</span> <span class="pl-k">&amp;&amp;</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line">      ((ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>0<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[xX][<span class="pl-c1">0-9a-fA-F</span>]</span><span class="pl-k">+</span><span class="pl-pds">/</span></span>))</td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">||</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>x<span class="pl-pds">&quot;</span></span> <span class="pl-k">||</span> ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>X<span class="pl-pds">&quot;</span></span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>&#39;<span class="pl-c1">[<span class="pl-c1">0-9a-fA-F</span>]</span><span class="pl-k">+</span>&#39;<span class="pl-pds">/</span></span>))) {</td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> hex</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/hexadecimal-literals.html</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>number<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">support</span>.<span class="pl-smi">binaryNumber</span> <span class="pl-k">&amp;&amp;</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line">      (((ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>b<span class="pl-pds">&quot;</span></span> <span class="pl-k">||</span> ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>B<span class="pl-pds">&quot;</span></span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>&#39;<span class="pl-c1">[01]</span><span class="pl-k">+</span>&#39;<span class="pl-pds">/</span></span>))</td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">||</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>0<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>b<span class="pl-c1">[01]</span><span class="pl-k">+</span><span class="pl-pds">/</span></span>)))) {</td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> bitstring</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/bit-field-literals.html</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>number<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">ch</span>.<span class="pl-c1">charCodeAt</span>(<span class="pl-c1">0</span>) <span class="pl-k">&gt;</span> <span class="pl-c1">47</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">ch</span>.<span class="pl-c1">charCodeAt</span>(<span class="pl-c1">0</span>) <span class="pl-k">&lt;</span> <span class="pl-c1">58</span>) {</td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> numbers</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/number-literals.html</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">*</span>(<span class="pl-cce">\.</span><span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">+</span>)<span class="pl-k">?</span>(<span class="pl-c1">[eE][-+]</span><span class="pl-k">?</span><span class="pl-c1">[<span class="pl-c1">0-9</span>]</span><span class="pl-k">+</span>)<span class="pl-k">?</span><span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">support</span>.<span class="pl-smi">decimallessFloat</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-cce">\.</span>(?!<span class="pl-cce">\.</span>)<span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>number<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>?<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> (<span class="pl-smi">stream</span>.<span class="pl-en">eatSpace</span>() <span class="pl-k">||</span> <span class="pl-smi">stream</span>.<span class="pl-en">eol</span>() <span class="pl-k">||</span> <span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>;<span class="pl-pds">&quot;</span></span>))) {</td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> placeholders</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-3<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>&#39;<span class="pl-pds">&quot;</span></span> <span class="pl-k">||</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&quot;<span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">support</span>.<span class="pl-smi">doubleQuote</span>)) {</td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> strings</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/string-literals.html</span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">state</span>.<span class="pl-smi">tokenize</span> <span class="pl-k">=</span> <span class="pl-en">tokenLiteral</span>(ch);</td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-smi">state</span>.<span class="pl-en">tokenize</span>(stream, state);</td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> ((((<span class="pl-smi">support</span>.<span class="pl-smi">nCharCast</span> <span class="pl-k">&amp;&amp;</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>n<span class="pl-pds">&quot;</span></span> <span class="pl-k">||</span> ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>N<span class="pl-pds">&quot;</span></span>))</td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">||</span> (<span class="pl-smi">support</span>.<span class="pl-smi">charsetCast</span> <span class="pl-k">&amp;&amp;</span> ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>_<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-c1">[<span class="pl-c1">a-z</span>][<span class="pl-c1">a-z0-9</span>]</span><span class="pl-k">*</span><span class="pl-pds">/</span>i</span>)))</td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">&amp;&amp;</span> (<span class="pl-smi">stream</span>.<span class="pl-en">peek</span>() <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>&#39;<span class="pl-pds">&quot;</span></span> <span class="pl-k">||</span> <span class="pl-smi">stream</span>.<span class="pl-en">peek</span>() <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&quot;<span class="pl-pds">&#39;</span></span>))) {</td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> charset casting: _utf8&#39;str&#39;, N&#39;str&#39;, n&#39;str&#39;</span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/string-literals.html</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>keyword<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[<span class="pl-cce">\(\)</span>,<span class="pl-cce">\;\[\]</span>]</span><span class="pl-pds">/</span></span>.<span class="pl-c1">test</span>(ch)) {</td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> no highlighting</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">support</span>.<span class="pl-smi">commentSlashSlash</span> <span class="pl-k">&amp;&amp;</span> ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>/<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>/<span class="pl-pds">&quot;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> 1-line comment</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-en">skipToEnd</span>();</td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>comment<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> ((<span class="pl-smi">support</span>.<span class="pl-smi">commentHash</span> <span class="pl-k">&amp;&amp;</span> ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>#<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">||</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>-<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>-<span class="pl-pds">&quot;</span></span>) <span class="pl-k">&amp;&amp;</span> (<span class="pl-k">!</span><span class="pl-smi">support</span>.<span class="pl-smi">commentSpaceRequired</span> <span class="pl-k">||</span> <span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span> <span class="pl-pds">&quot;</span></span>)))) {</td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> 1-line comments</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: https://kb.askmonty.org/en/comment-syntax/</span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-en">skipToEnd</span>();</td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>comment<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>/<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>*<span class="pl-pds">&quot;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> multi-line comments</span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: https://kb.askmonty.org/en/comment-syntax/</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">state</span>.<span class="pl-smi">tokenize</span> <span class="pl-k">=</span> <span class="pl-en">tokenComment</span>(<span class="pl-c1">1</span>);</td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-smi">state</span>.<span class="pl-en">tokenize</span>(stream, state);</td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>.<span class="pl-pds">&quot;</span></span>) {</td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> .1 for 0.1</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">support</span>.<span class="pl-smi">zerolessFloat</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>(?:<span class="pl-c1">\d</span><span class="pl-k">+</span>(?:e<span class="pl-c1">[+-]</span><span class="pl-k">?</span><span class="pl-c1">\d</span><span class="pl-k">+</span>)<span class="pl-k">?</span>)<span class="pl-pds">/</span>i</span>))</td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>number<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-cce">\.</span><span class="pl-k">+</span><span class="pl-pds">/</span></span>))</td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span> <span class="pl-c1">null</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> .table_name (ODBC)</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> // ref: http://dev.mysql.com/doc/refman/5.6/en/identifier-qualifiers.html</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">support</span>.<span class="pl-smi">ODBCdotTable</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[<span class="pl-c1">\w\d</span>_]</span><span class="pl-k">+</span><span class="pl-pds">/</span></span>))</td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">operatorChars</span>.<span class="pl-c1">test</span>(ch)) {</td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> operators</span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-en">eatWhile</span>(operatorChars);</td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>{<span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line">        (<span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>( )<span class="pl-k">*</span>(d<span class="pl-k">|</span>D<span class="pl-k">|</span>t<span class="pl-k">|</span>T<span class="pl-k">|</span>ts<span class="pl-k">|</span>TS)( )<span class="pl-k">*</span>&#39;<span class="pl-c1">[<span class="pl-k">^</span>&#39;]</span><span class="pl-k">*</span>&#39;( )<span class="pl-k">*</span>}<span class="pl-pds">/</span></span>) <span class="pl-k">||</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>( )<span class="pl-k">*</span>(d<span class="pl-k">|</span>D<span class="pl-k">|</span>t<span class="pl-k">|</span>T<span class="pl-k">|</span>ts<span class="pl-k">|</span>TS)( )<span class="pl-k">*</span>&quot;<span class="pl-c1">[<span class="pl-k">^</span>&quot;]</span><span class="pl-k">*</span>&quot;( )<span class="pl-k">*</span>}<span class="pl-pds">/</span></span>))) {</td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> dates (weird ODBC syntax)</span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/date-and-time-literals.html</span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>number<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> {</td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-en">eatWhile</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[_<span class="pl-c1">\w\d</span>]</span><span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> word <span class="pl-k">=</span> <span class="pl-smi">stream</span>.<span class="pl-c1">current</span>().<span class="pl-c1">toLowerCase</span>();</td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> dates (standard SQL syntax)</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/date-and-time-literals.html</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">dateSQL</span>.<span class="pl-en">hasOwnProperty</span>(word) <span class="pl-k">&amp;&amp;</span> (<span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>( )<span class="pl-k">+</span>&#39;<span class="pl-c1">[<span class="pl-k">^</span>&#39;]</span><span class="pl-k">*</span>&#39;<span class="pl-pds">/</span></span>) <span class="pl-k">||</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>( )<span class="pl-k">+</span>&quot;<span class="pl-c1">[<span class="pl-k">^</span>&quot;]</span><span class="pl-k">*</span>&quot;<span class="pl-pds">/</span></span>)))</td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>number<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">atoms</span>.<span class="pl-en">hasOwnProperty</span>(word)) <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>atom<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">builtin</span>.<span class="pl-en">hasOwnProperty</span>(word)) <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>builtin<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">keywords</span>.<span class="pl-en">hasOwnProperty</span>(word)) <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>keyword<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">client</span>.<span class="pl-en">hasOwnProperty</span>(word)) <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>string-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> &#39;string&#39;, with char specified in quote escaped by &#39;\&#39;</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">tokenLiteral</span>(<span class="pl-smi">quote</span>) {</td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> <span class="pl-k">function</span>(<span class="pl-smi">stream</span>, <span class="pl-smi">state</span>) {</td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> escaped <span class="pl-k">=</span> <span class="pl-c1">false</span>, ch;</td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">while</span> ((ch <span class="pl-k">=</span> <span class="pl-smi">stream</span>.<span class="pl-c1">next</span>()) <span class="pl-k">!=</span> <span class="pl-c1">null</span>) {</td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">if</span> (ch <span class="pl-k">==</span> quote <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span>escaped) {</td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line">          <span class="pl-smi">state</span>.<span class="pl-smi">tokenize</span> <span class="pl-k">=</span> tokenBase;</td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line">          <span class="pl-k">break</span>;</td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line">        }</td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line">        escaped <span class="pl-k">=</span> <span class="pl-k">!</span>escaped <span class="pl-k">&amp;&amp;</span> ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\\</span><span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>string<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line">    };</td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">tokenComment</span>(<span class="pl-smi">depth</span>) {</td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> <span class="pl-k">function</span>(<span class="pl-smi">stream</span>, <span class="pl-smi">state</span>) {</td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> m <span class="pl-k">=</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">.</span><span class="pl-k">*?</span>(<span class="pl-cce">\/\*</span><span class="pl-k">|</span><span class="pl-cce">\*\/</span>)<span class="pl-pds">/</span></span>)</td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-k">!</span>m) <span class="pl-smi">stream</span>.<span class="pl-en">skipToEnd</span>()</td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">else</span> <span class="pl-k">if</span> (m[<span class="pl-c1">1</span>] <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>/*<span class="pl-pds">&quot;</span></span>) <span class="pl-smi">state</span>.<span class="pl-smi">tokenize</span> <span class="pl-k">=</span> <span class="pl-en">tokenComment</span>(depth <span class="pl-k">+</span> <span class="pl-c1">1</span>)</td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">else</span> <span class="pl-k">if</span> (depth <span class="pl-k">&gt;</span> <span class="pl-c1">1</span>) <span class="pl-smi">state</span>.<span class="pl-smi">tokenize</span> <span class="pl-k">=</span> <span class="pl-en">tokenComment</span>(depth <span class="pl-k">-</span> <span class="pl-c1">1</span>)</td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">else</span> <span class="pl-smi">state</span>.<span class="pl-smi">tokenize</span> <span class="pl-k">=</span> tokenBase</td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>comment<span class="pl-pds">&quot;</span></span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">pushContext</span>(<span class="pl-smi">stream</span>, <span class="pl-smi">state</span>, <span class="pl-smi">type</span>) {</td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line">    <span class="pl-smi">state</span>.<span class="pl-smi">context</span> <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line">      prev<span class="pl-k">:</span> <span class="pl-smi">state</span>.<span class="pl-smi">context</span>,</td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line">      indent<span class="pl-k">:</span> <span class="pl-smi">stream</span>.<span class="pl-en">indentation</span>(),</td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line">      col<span class="pl-k">:</span> <span class="pl-smi">stream</span>.<span class="pl-en">column</span>(),</td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line">      type<span class="pl-k">:</span> type</td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line">    };</td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">popContext</span>(<span class="pl-smi">state</span>) {</td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line">    <span class="pl-smi">state</span>.<span class="pl-smi">indent</span> <span class="pl-k">=</span> <span class="pl-smi">state</span>.<span class="pl-smi">context</span>.<span class="pl-smi">indent</span>;</td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line">    <span class="pl-smi">state</span>.<span class="pl-smi">context</span> <span class="pl-k">=</span> <span class="pl-smi">state</span>.<span class="pl-smi">context</span>.<span class="pl-smi">prev</span>;</td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">return</span> {</td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">startState</span><span class="pl-k">:</span> <span class="pl-k">function</span>() {</td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> {tokenize<span class="pl-k">:</span> tokenBase, context<span class="pl-k">:</span> <span class="pl-c1">null</span>};</td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">token</span><span class="pl-k">:</span> <span class="pl-k">function</span>(<span class="pl-smi">stream</span>, <span class="pl-smi">state</span>) {</td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-en">sol</span>()) {</td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">if</span> (<span class="pl-smi">state</span>.<span class="pl-smi">context</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">state</span>.<span class="pl-smi">context</span>.<span class="pl-c1">align</span> <span class="pl-k">==</span> <span class="pl-c1">null</span>)</td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code blob-code-inner js-file-line">          <span class="pl-smi">state</span>.<span class="pl-smi">context</span>.<span class="pl-c1">align</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">state</span>.<span class="pl-smi">tokenize</span> <span class="pl-k">==</span> tokenBase <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">stream</span>.<span class="pl-en">eatSpace</span>()) <span class="pl-k">return</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> style <span class="pl-k">=</span> <span class="pl-smi">state</span>.<span class="pl-en">tokenize</span>(stream, state);</td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (style <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>comment<span class="pl-pds">&quot;</span></span>) <span class="pl-k">return</span> style;</td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">state</span>.<span class="pl-smi">context</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">state</span>.<span class="pl-smi">context</span>.<span class="pl-c1">align</span> <span class="pl-k">==</span> <span class="pl-c1">null</span>)</td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code blob-code-inner js-file-line">        <span class="pl-smi">state</span>.<span class="pl-smi">context</span>.<span class="pl-c1">align</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> tok <span class="pl-k">=</span> <span class="pl-smi">stream</span>.<span class="pl-c1">current</span>();</td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (tok <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>(<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code blob-code-inner js-file-line">        <span class="pl-en">pushContext</span>(stream, state, <span class="pl-s"><span class="pl-pds">&quot;</span>)<span class="pl-pds">&quot;</span></span>);</td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">else</span> <span class="pl-k">if</span> (tok <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>[<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code blob-code-inner js-file-line">        <span class="pl-en">pushContext</span>(stream, state, <span class="pl-s"><span class="pl-pds">&quot;</span>]<span class="pl-pds">&quot;</span></span>);</td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">state</span>.<span class="pl-smi">context</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">state</span>.<span class="pl-smi">context</span>.<span class="pl-c1">type</span> <span class="pl-k">==</span> tok)</td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code blob-code-inner js-file-line">        <span class="pl-en">popContext</span>(state);</td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> style;</td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">indent</span><span class="pl-k">:</span> <span class="pl-k">function</span>(<span class="pl-smi">state</span>, <span class="pl-smi">textAfter</span>) {</td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> cx <span class="pl-k">=</span> <span class="pl-smi">state</span>.<span class="pl-smi">context</span>;</td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-k">!</span>cx) <span class="pl-k">return</span> <span class="pl-smi">CodeMirror</span>.<span class="pl-smi">Pass</span>;</td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> closing <span class="pl-k">=</span> <span class="pl-smi">textAfter</span>.<span class="pl-c1">charAt</span>(<span class="pl-c1">0</span>) <span class="pl-k">==</span> <span class="pl-smi">cx</span>.<span class="pl-c1">type</span>;</td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (<span class="pl-smi">cx</span>.<span class="pl-c1">align</span>) <span class="pl-k">return</span> <span class="pl-smi">cx</span>.<span class="pl-smi">col</span> <span class="pl-k">+</span> (closing <span class="pl-k">?</span> <span class="pl-c1">0</span> <span class="pl-k">:</span> <span class="pl-c1">1</span>);</td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">else</span> <span class="pl-k">return</span> <span class="pl-smi">cx</span>.<span class="pl-smi">indent</span> <span class="pl-k">+</span> (closing <span class="pl-k">?</span> <span class="pl-c1">0</span> <span class="pl-k">:</span> <span class="pl-smi">config</span>.<span class="pl-smi">indentUnit</span>);</td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code blob-code-inner js-file-line">    blockCommentStart<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>/*<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code blob-code-inner js-file-line">    blockCommentEnd<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>*/<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code blob-code-inner js-file-line">    lineComment<span class="pl-k">:</span> <span class="pl-smi">support</span>.<span class="pl-smi">commentSlashSlash</span> <span class="pl-k">?</span> <span class="pl-s"><span class="pl-pds">&quot;</span>//<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-smi">support</span>.<span class="pl-smi">commentHash</span> <span class="pl-k">?</span> <span class="pl-s"><span class="pl-pds">&quot;</span>#<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>--<span class="pl-pds">&quot;</span></span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code blob-code-inner js-file-line">  };</td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code blob-code-inner js-file-line">});</td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code blob-code-inner js-file-line">(<span class="pl-k">function</span>() {</td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code blob-code-inner js-file-line">  <span class="pl-s"><span class="pl-pds">&quot;</span>use strict<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> `identifier`</span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">hookIdentifier</span>(<span class="pl-smi">stream</span>) {</td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> MySQL/MariaDB identifiers</span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.6/en/identifier-qualifiers.html</span></td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> ch;</td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">while</span> ((ch <span class="pl-k">=</span> <span class="pl-smi">stream</span>.<span class="pl-c1">next</span>()) <span class="pl-k">!=</span> <span class="pl-c1">null</span>) {</td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span>)) <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code blob-code-inner js-file-line">    <span class="pl-smi">stream</span>.<span class="pl-en">backUp</span>(<span class="pl-smi">stream</span>.<span class="pl-c1">current</span>().<span class="pl-c1">length</span> <span class="pl-k">-</span> <span class="pl-c1">1</span>);</td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> <span class="pl-smi">stream</span>.<span class="pl-en">eatWhile</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-c1">\w</span><span class="pl-pds">/</span></span>) <span class="pl-k">?</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> &quot;identifier&quot;</span></td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">hookIdentifierDoublequote</span>(<span class="pl-smi">stream</span>) {</td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> Standard SQL /SQLite identifiers</span></td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://web.archive.org/web/20160813185132/http://savage.net.au/SQL/sql-99.bnf.html#delimited%20identifier</span></td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://sqlite.org/lang_keywords.html</span></td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> ch;</td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">while</span> ((ch <span class="pl-k">=</span> <span class="pl-smi">stream</span>.<span class="pl-c1">next</span>()) <span class="pl-k">!=</span> <span class="pl-c1">null</span>) {</td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> (ch <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\&quot;</span><span class="pl-pds">&quot;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\&quot;</span><span class="pl-pds">&quot;</span></span>)) <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code blob-code-inner js-file-line">    <span class="pl-smi">stream</span>.<span class="pl-en">backUp</span>(<span class="pl-smi">stream</span>.<span class="pl-c1">current</span>().<span class="pl-c1">length</span> <span class="pl-k">-</span> <span class="pl-c1">1</span>);</td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> <span class="pl-smi">stream</span>.<span class="pl-en">eatWhile</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-c1">\w</span><span class="pl-pds">/</span></span>) <span class="pl-k">?</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> variable token</span></td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">hookVar</span>(<span class="pl-smi">stream</span>) {</td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> variables</span></td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> @@prefix.varName @varName</span></td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> varName can be quoted with ` or &#39; or &quot;</span></td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/user-variables.html</span></td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>@<span class="pl-pds">&quot;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>session<span class="pl-cce">\.</span><span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>local<span class="pl-cce">\.</span><span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span>global<span class="pl-cce">\.</span><span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>&#39;<span class="pl-pds">&quot;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">.</span><span class="pl-k">*</span>&#39;<span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>&quot;<span class="pl-pds">&#39;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">.</span><span class="pl-k">*</span>&quot;<span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">.</span><span class="pl-k">*</span>`<span class="pl-pds">/</span></span>);</td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code blob-code-inner js-file-line">    } <span class="pl-k">else</span> <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[<span class="pl-c1">0-9a-zA-Z</span>$<span class="pl-cce">\.\_</span>]</span><span class="pl-k">+</span><span class="pl-pds">/</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code blob-code-inner js-file-line">  };</td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> short client keyword token</span></td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">hookClient</span>(<span class="pl-smi">stream</span>) {</td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> \N means NULL</span></td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/null-values.html</span></td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">if</span> (<span class="pl-smi">stream</span>.<span class="pl-en">eat</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>N<span class="pl-pds">&quot;</span></span>)) {</td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span> <span class="pl-s"><span class="pl-pds">&quot;</span>atom<span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> \g, etc</span></td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://dev.mysql.com/doc/refman/5.5/en/mysql-commands.html</span></td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> <span class="pl-smi">stream</span>.<span class="pl-c1">match</span>(<span class="pl-sr"><span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[<span class="pl-c1">a-zA-Z</span><span class="pl-c1">.</span>#!?]</span><span class="pl-pds">/</span></span>) <span class="pl-k">?</span> <span class="pl-s"><span class="pl-pds">&quot;</span>variable-2<span class="pl-pds">&quot;</span></span> <span class="pl-k">:</span> <span class="pl-c1">null</span>;</td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> these keywords are used by all SQL dialects (however, a mode can still overwrite it)</span></td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">var</span> sqlKeywords <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&quot;</span>alter and as asc between by count create delete desc distinct drop from group having in insert into is join like not on or order select set table union update values where limit <span class="pl-pds">&quot;</span></span>;</td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> turn a space-separated list into an array</span></td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">function</span> <span class="pl-en">set</span>(<span class="pl-smi">str</span>) {</td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">var</span> obj <span class="pl-k">=</span> {}, words <span class="pl-k">=</span> <span class="pl-smi">str</span>.<span class="pl-c1">split</span>(<span class="pl-s"><span class="pl-pds">&quot;</span> <span class="pl-pds">&quot;</span></span>);</td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">for</span> (<span class="pl-k">var</span> i <span class="pl-k">=</span> <span class="pl-c1">0</span>; i <span class="pl-k">&lt;</span> <span class="pl-smi">words</span>.<span class="pl-c1">length</span>; <span class="pl-k">++</span>i) obj[words[i]] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code blob-code-inner js-file-line">    <span class="pl-k">return</span> obj;</td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code blob-code-inner js-file-line">  }</td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> A generic SQL Mode. It&#39;s not a standard, it just try to support what is generally supported</span></td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-sql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code blob-code-inner js-file-line">    keywords<span class="pl-k">:</span> <span class="pl-en">set</span>(sqlKeywords <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&quot;</span>begin<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bool boolean bit blob enum long longblob longtext medium mediumblob mediumint mediumtext time timestamp tinyblob tinyint tinytext text bigint int int1 int2 int3 int4 int8 integer float float4 float8 double char varbinary varchar varcharacter precision real date datetime year unsigned signed decimal numeric<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null unknown<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ODBCdotTable doubleQuote binaryNumber hexNumber<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-mssql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>charset clear connect edit ego exit go help nopager notee nowarning pager print prompt quit rehash source status system tee<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code blob-code-inner js-file-line">    keywords<span class="pl-k">:</span> <span class="pl-en">set</span>(sqlKeywords <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&quot;</span>begin trigger proc view index for add constraint key primary foreign collate clustered nonclustered declare exec<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bigint numeric bit smallint decimal smallmoney int tinyint money float real char varchar text nchar nvarchar ntext binary varbinary image cursor timestamp hierarchyid uniqueidentifier sql_variant xml table <span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null unknown<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date datetimeoffset datetime2 smalldatetime datetime time<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
        <td id="LC296" class="blob-code blob-code-inner js-file-line">    hooks<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
        <td id="LC297" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>@<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookVar</td>
      </tr>
      <tr>
        <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
        <td id="LC298" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
        <td id="LC299" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
        <td id="LC300" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
        <td id="LC301" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-mysql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
        <td id="LC302" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
        <td id="LC303" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>charset clear connect edit ego exit go help nopager notee nowarning pager print prompt quit rehash source status system tee<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
        <td id="LC304" class="blob-code blob-code-inner js-file-line">    keywords: set(sqlKeywords + &quot;accessible action add after algorithm all analyze asensitive at authors auto_increment autocommit avg avg_row_length before binary binlog both btree cache call cascade cascaded case catalog_name chain change changed character check checkpoint checksum class_origin client_statistics close coalesce code collate collation collations column columns comment commit committed completion concurrent condition connection consistent constraint contains continue contributors convert cross current current_date current_time current_timestamp current_user cursor data database databases day_hour day_microsecond day_minute day_second deallocate dec declare default delay_key_write delayed delimiter des_key_file describe deterministic dev_pop dev_samp deviance diagnostics directory disable discard distinctrow div dual dumpfile each elseif enable enclosed end ends engine engines enum errors escape escaped even event events every execute exists exit explain extended fast fetch field fields first flush for force foreign found_rows full fulltext function general get global grant grants group group_concat handler hash help high_priority hosts hour_microsecond hour_minute hour_second if ignore ignore_server_ids import index index_statistics infile inner innodb inout insensitive insert_method install interval invoker isolation iterate key keys kill language last leading leave left level limit linear lines list load local localtime localtimestamp lock logs low_priority master master_heartbeat_period master_ssl_verify_server_cert masters match max max_rows maxvalue message_text middleint migrate min min_rows minute_microsecond minute_second mod mode modifies modify mutex mysql_errno natural next no no_write_to_binlog offline offset one online open optimize option optionally out outer outfile pack_keys parser partition partitions password phase plugin plugins prepare preserve prev primary privileges procedure processlist profile profiles purge query quick range read read_write reads real rebuild recover references regexp relaylog release remove rename reorganize repair repeatable replace require resignal restrict resume return returns revoke right rlike rollback rollup row row_format rtree savepoint schedule schema schema_name schemas second_microsecond security sensitive separator serializable server session share show signal slave slow smallint snapshot soname spatial specific sql sql_big_result sql_buffer_result sql_cache sql_calc_found_rows sql_no_cache sql_small_result sqlexception sqlstate sqlwarning ssl start starting starts status std stddev stddev_pop stddev_samp storage straight_join subclass_origin sum suspend table_name table_statistics tables tablespace temporary terminated to trailing transaction trigger triggers truncate uncommitted undo uninstall unique unlock upgrade usage use use_frm user user_resources user_statistics using utc_date utc_time utc_timestamp value variables varying view views warnings when while with work write xa xor year_month zerofill begin do then else loop repeat&quot;),</td>
      </tr>
      <tr>
        <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
        <td id="LC305" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bool boolean bit blob decimal double float long longblob longtext medium mediumblob mediumint mediumtext time timestamp tinyblob tinyint tinytext text bigint int int1 int2 int3 int4 int8 integer float float4 float8 double char varbinary varchar varcharacter precision date datetime year unsigned signed numeric<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
        <td id="LC306" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null unknown<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
        <td id="LC307" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=&amp;|^]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
        <td id="LC308" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
        <td id="LC309" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ODBCdotTable decimallessFloat zerolessFloat binaryNumber hexNumber doubleQuote nCharCast charsetCast commentHash commentSpaceRequired<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
        <td id="LC310" class="blob-code blob-code-inner js-file-line">    hooks<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
        <td id="LC311" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>@<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookVar,</td>
      </tr>
      <tr>
        <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
        <td id="LC312" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookIdentifier,</td>
      </tr>
      <tr>
        <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
        <td id="LC313" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\\</span><span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>  hookClient</td>
      </tr>
      <tr>
        <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
        <td id="LC314" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L315" class="blob-num js-line-number" data-line-number="315"></td>
        <td id="LC315" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L316" class="blob-num js-line-number" data-line-number="316"></td>
        <td id="LC316" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L317" class="blob-num js-line-number" data-line-number="317"></td>
        <td id="LC317" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-mariadb<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L318" class="blob-num js-line-number" data-line-number="318"></td>
        <td id="LC318" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L319" class="blob-num js-line-number" data-line-number="319"></td>
        <td id="LC319" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>charset clear connect edit ego exit go help nopager notee nowarning pager print prompt quit rehash source status system tee<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L320" class="blob-num js-line-number" data-line-number="320"></td>
        <td id="LC320" class="blob-code blob-code-inner js-file-line">    keywords: set(sqlKeywords + &quot;accessible action add after algorithm all always analyze asensitive at authors auto_increment autocommit avg avg_row_length before binary binlog both btree cache call cascade cascaded case catalog_name chain change changed character check checkpoint checksum class_origin client_statistics close coalesce code collate collation collations column columns comment commit committed completion concurrent condition connection consistent constraint contains continue contributors convert cross current current_date current_time current_timestamp current_user cursor data database databases day_hour day_microsecond day_minute day_second deallocate dec declare default delay_key_write delayed delimiter des_key_file describe deterministic dev_pop dev_samp deviance diagnostics directory disable discard distinctrow div dual dumpfile each elseif enable enclosed end ends engine engines enum errors escape escaped even event events every execute exists exit explain extended fast fetch field fields first flush for force foreign found_rows full fulltext function general generated get global grant grants group groupby_concat handler hard hash help high_priority hosts hour_microsecond hour_minute hour_second if ignore ignore_server_ids import index index_statistics infile inner innodb inout insensitive insert_method install interval invoker isolation iterate key keys kill language last leading leave left level limit linear lines list load local localtime localtimestamp lock logs low_priority master master_heartbeat_period master_ssl_verify_server_cert masters match max max_rows maxvalue message_text middleint migrate min min_rows minute_microsecond minute_second mod mode modifies modify mutex mysql_errno natural next no no_write_to_binlog offline offset one online open optimize option optionally out outer outfile pack_keys parser partition partitions password persistent phase plugin plugins prepare preserve prev primary privileges procedure processlist profile profiles purge query quick range read read_write reads real rebuild recover references regexp relaylog release remove rename reorganize repair repeatable replace require resignal restrict resume return returns revoke right rlike rollback rollup row row_format rtree savepoint schedule schema schema_name schemas second_microsecond security sensitive separator serializable server session share show shutdown signal slave slow smallint snapshot soft soname spatial specific sql sql_big_result sql_buffer_result sql_cache sql_calc_found_rows sql_no_cache sql_small_result sqlexception sqlstate sqlwarning ssl start starting starts status std stddev stddev_pop stddev_samp storage straight_join subclass_origin sum suspend table_name table_statistics tables tablespace temporary terminated to trailing transaction trigger triggers truncate uncommitted undo uninstall unique unlock upgrade usage use use_frm user user_resources user_statistics using utc_date utc_time utc_timestamp value variables varying view views virtual warnings when while with work write xa xor year_month zerofill begin do then else loop repeat&quot;),</td>
      </tr>
      <tr>
        <td id="L321" class="blob-num js-line-number" data-line-number="321"></td>
        <td id="LC321" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bool boolean bit blob decimal double float long longblob longtext medium mediumblob mediumint mediumtext time timestamp tinyblob tinyint tinytext text bigint int int1 int2 int3 int4 int8 integer float float4 float8 double char varbinary varchar varcharacter precision date datetime year unsigned signed numeric<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L322" class="blob-num js-line-number" data-line-number="322"></td>
        <td id="LC322" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null unknown<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L323" class="blob-num js-line-number" data-line-number="323"></td>
        <td id="LC323" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=&amp;|^]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L324" class="blob-num js-line-number" data-line-number="324"></td>
        <td id="LC324" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L325" class="blob-num js-line-number" data-line-number="325"></td>
        <td id="LC325" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ODBCdotTable decimallessFloat zerolessFloat binaryNumber hexNumber doubleQuote nCharCast charsetCast commentHash commentSpaceRequired<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L326" class="blob-num js-line-number" data-line-number="326"></td>
        <td id="LC326" class="blob-code blob-code-inner js-file-line">    hooks<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L327" class="blob-num js-line-number" data-line-number="327"></td>
        <td id="LC327" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>@<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookVar,</td>
      </tr>
      <tr>
        <td id="L328" class="blob-num js-line-number" data-line-number="328"></td>
        <td id="LC328" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookIdentifier,</td>
      </tr>
      <tr>
        <td id="L329" class="blob-num js-line-number" data-line-number="329"></td>
        <td id="LC329" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\\</span><span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>  hookClient</td>
      </tr>
      <tr>
        <td id="L330" class="blob-num js-line-number" data-line-number="330"></td>
        <td id="LC330" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L331" class="blob-num js-line-number" data-line-number="331"></td>
        <td id="LC331" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L332" class="blob-num js-line-number" data-line-number="332"></td>
        <td id="LC332" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L333" class="blob-num js-line-number" data-line-number="333"></td>
        <td id="LC333" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> provided by the phpLiteAdmin project - phpliteadmin.org</span></td>
      </tr>
      <tr>
        <td id="L334" class="blob-num js-line-number" data-line-number="334"></td>
        <td id="LC334" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-sqlite<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L335" class="blob-num js-line-number" data-line-number="335"></td>
        <td id="LC335" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L336" class="blob-num js-line-number" data-line-number="336"></td>
        <td id="LC336" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> commands of the official SQLite client, ref: https://www.sqlite.org/cli.html#dotcmd</span></td>
      </tr>
      <tr>
        <td id="L337" class="blob-num js-line-number" data-line-number="337"></td>
        <td id="LC337" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>auth backup bail binary changes check clone databases dbinfo dump echo eqp exit explain fullschema headers help import imposter indexes iotrace limit lint load log mode nullvalue once open output print prompt quit read restore save scanstats schema separator session shell show stats system tables testcase timeout timer trace vfsinfo vfslist vfsname width<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L338" class="blob-num js-line-number" data-line-number="338"></td>
        <td id="LC338" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://sqlite.org/lang_keywords.html</span></td>
      </tr>
      <tr>
        <td id="L339" class="blob-num js-line-number" data-line-number="339"></td>
        <td id="LC339" class="blob-code blob-code-inner js-file-line">    keywords<span class="pl-k">:</span> <span class="pl-en">set</span>(sqlKeywords <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">&quot;</span>abort action add after all analyze attach autoincrement before begin cascade case cast check collate column commit conflict constraint cross current_date current_time current_timestamp database default deferrable deferred detach each else end escape except exclusive exists explain fail for foreign full glob if ignore immediate index indexed initially inner instead intersect isnull key left limit match natural no notnull null of offset outer plan pragma primary query raise recursive references regexp reindex release rename replace restrict right rollback row savepoint temp temporary then to transaction trigger unique using vacuum view virtual when with without<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L340" class="blob-num js-line-number" data-line-number="340"></td>
        <td id="LC340" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> SQLite is weakly typed, ref: http://sqlite.org/datatype3.html. This is just a list of some common types.</span></td>
      </tr>
      <tr>
        <td id="L341" class="blob-num js-line-number" data-line-number="341"></td>
        <td id="LC341" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bool boolean bit blob decimal double float long longblob longtext medium mediumblob mediumint mediumtext time timestamp tinyblob tinyint tinytext text clob bigint int int2 int8 integer float double char varchar date datetime year unsigned signed numeric real<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L342" class="blob-num js-line-number" data-line-number="342"></td>
        <td id="LC342" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://sqlite.org/syntax/literal-value.html</span></td>
      </tr>
      <tr>
        <td id="L343" class="blob-num js-line-number" data-line-number="343"></td>
        <td id="LC343" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>null current_date current_time current_timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L344" class="blob-num js-line-number" data-line-number="344"></td>
        <td id="LC344" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> ref: http://sqlite.org/lang_expr.html#binaryops</span></td>
      </tr>
      <tr>
        <td id="L345" class="blob-num js-line-number" data-line-number="345"></td>
        <td id="LC345" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=&amp;|/~]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L346" class="blob-num js-line-number" data-line-number="346"></td>
        <td id="LC346" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> SQLite is weakly typed, ref: http://sqlite.org/datatype3.html. This is just a list of some common types.</span></td>
      </tr>
      <tr>
        <td id="L347" class="blob-num js-line-number" data-line-number="347"></td>
        <td id="LC347" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp datetime<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L348" class="blob-num js-line-number" data-line-number="348"></td>
        <td id="LC348" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>decimallessFloat zerolessFloat<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L349" class="blob-num js-line-number" data-line-number="349"></td>
        <td id="LC349" class="blob-code blob-code-inner js-file-line">    identifierQuote<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\&quot;</span><span class="pl-pds">&quot;</span></span>,  <span class="pl-c"><span class="pl-c">//</span>ref: http://sqlite.org/lang_keywords.html</span></td>
      </tr>
      <tr>
        <td id="L350" class="blob-num js-line-number" data-line-number="350"></td>
        <td id="LC350" class="blob-code blob-code-inner js-file-line">    hooks<span class="pl-k">:</span> {</td>
      </tr>
      <tr>
        <td id="L351" class="blob-num js-line-number" data-line-number="351"></td>
        <td id="LC351" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> bind-parameters ref:http://sqlite.org/lang_expr.html#varparam</span></td>
      </tr>
      <tr>
        <td id="L352" class="blob-num js-line-number" data-line-number="352"></td>
        <td id="LC352" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>@<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookVar,</td>
      </tr>
      <tr>
        <td id="L353" class="blob-num js-line-number" data-line-number="353"></td>
        <td id="LC353" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>:<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookVar,</td>
      </tr>
      <tr>
        <td id="L354" class="blob-num js-line-number" data-line-number="354"></td>
        <td id="LC354" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>?<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookVar,</td>
      </tr>
      <tr>
        <td id="L355" class="blob-num js-line-number" data-line-number="355"></td>
        <td id="LC355" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>$<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookVar,</td>
      </tr>
      <tr>
        <td id="L356" class="blob-num js-line-number" data-line-number="356"></td>
        <td id="LC356" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> The preferred way to escape Identifiers is using double quotes, ref: http://sqlite.org/lang_keywords.html</span></td>
      </tr>
      <tr>
        <td id="L357" class="blob-num js-line-number" data-line-number="357"></td>
        <td id="LC357" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\&quot;</span><span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookIdentifierDoublequote,</td>
      </tr>
      <tr>
        <td id="L358" class="blob-num js-line-number" data-line-number="358"></td>
        <td id="LC358" class="blob-code blob-code-inner js-file-line">      <span class="pl-c"><span class="pl-c">//</span> there is also support for backtics, ref: http://sqlite.org/lang_keywords.html</span></td>
      </tr>
      <tr>
        <td id="L359" class="blob-num js-line-number" data-line-number="359"></td>
        <td id="LC359" class="blob-code blob-code-inner js-file-line">      <span class="pl-s"><span class="pl-pds">&quot;</span>`<span class="pl-pds">&quot;</span></span><span class="pl-k">:</span>   hookIdentifier</td>
      </tr>
      <tr>
        <td id="L360" class="blob-num js-line-number" data-line-number="360"></td>
        <td id="LC360" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="L361" class="blob-num js-line-number" data-line-number="361"></td>
        <td id="LC361" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L362" class="blob-num js-line-number" data-line-number="362"></td>
        <td id="LC362" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L363" class="blob-num js-line-number" data-line-number="363"></td>
        <td id="LC363" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> the query language used by Apache Cassandra is called CQL, but this mime type</span></td>
      </tr>
      <tr>
        <td id="L364" class="blob-num js-line-number" data-line-number="364"></td>
        <td id="LC364" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> is called Cassandra to avoid confusion with Contextual Query Language</span></td>
      </tr>
      <tr>
        <td id="L365" class="blob-num js-line-number" data-line-number="365"></td>
        <td id="LC365" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-cassandra<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L366" class="blob-num js-line-number" data-line-number="366"></td>
        <td id="LC366" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L367" class="blob-num js-line-number" data-line-number="367"></td>
        <td id="LC367" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> { },</td>
      </tr>
      <tr>
        <td id="L368" class="blob-num js-line-number" data-line-number="368"></td>
        <td id="LC368" class="blob-code blob-code-inner js-file-line">    keywords<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>add all allow alter and any apply as asc authorize batch begin by clustering columnfamily compact consistency count create custom delete desc distinct drop each_quorum exists filtering from grant if in index insert into key keyspace keyspaces level limit local_one local_quorum modify nan norecursive nosuperuser not of on one order password permission permissions primary quorum rename revoke schema select set storage superuser table three to token truncate ttl two type unlogged update use user users using values where with writetime<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L369" class="blob-num js-line-number" data-line-number="369"></td>
        <td id="LC369" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ascii bigint blob boolean counter decimal double float frozen inet int list map static text timestamp timeuuid tuple uuid varchar varint<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L370" class="blob-num js-line-number" data-line-number="370"></td>
        <td id="LC370" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true infinity NaN<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L371" class="blob-num js-line-number" data-line-number="371"></td>
        <td id="LC371" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[&lt;&gt;=]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L372" class="blob-num js-line-number" data-line-number="372"></td>
        <td id="LC372" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> { },</td>
      </tr>
      <tr>
        <td id="L373" class="blob-num js-line-number" data-line-number="373"></td>
        <td id="LC373" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>commentSlashSlash decimallessFloat<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L374" class="blob-num js-line-number" data-line-number="374"></td>
        <td id="LC374" class="blob-code blob-code-inner js-file-line">    hooks<span class="pl-k">:</span> { }</td>
      </tr>
      <tr>
        <td id="L375" class="blob-num js-line-number" data-line-number="375"></td>
        <td id="LC375" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L376" class="blob-num js-line-number" data-line-number="376"></td>
        <td id="LC376" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L377" class="blob-num js-line-number" data-line-number="377"></td>
        <td id="LC377" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> this is based on Peter Raganitsch&#39;s &#39;plsql&#39; mode</span></td>
      </tr>
      <tr>
        <td id="L378" class="blob-num js-line-number" data-line-number="378"></td>
        <td id="LC378" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-plsql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L379" class="blob-num js-line-number" data-line-number="379"></td>
        <td id="LC379" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span>       <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L380" class="blob-num js-line-number" data-line-number="380"></td>
        <td id="LC380" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span>     <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>appinfo arraysize autocommit autoprint autorecovery autotrace blockterminator break btitle cmdsep colsep compatibility compute concat copycommit copytypecheck define describe echo editfile embedded escape exec execute feedback flagger flush heading headsep instance linesize lno loboffset logsource long longchunksize markup native newpage numformat numwidth pagesize pause pno recsep recsepchar release repfooter repheader serveroutput shiftinout show showmode size spool sqlblanklines sqlcase sqlcode sqlcontinue sqlnumber sqlpluscompatibility sqlprefix sqlprompt sqlterminator suffix tab term termout time timing trimout trimspool ttitle underline verify version wrap<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L381" class="blob-num js-line-number" data-line-number="381"></td>
        <td id="LC381" class="blob-code blob-code-inner js-file-line">    keywords:   set(&quot;abort accept access add all alter and any array arraylen as asc assert assign at attributes audit authorization avg base_table begin between binary_integer body boolean by case cast char char_base check close cluster clusters colauth column comment commit compress connect connected constant constraint crash create current currval cursor data_base database date dba deallocate debugoff debugon decimal declare default definition delay delete desc digits dispose distinct do drop else elseif elsif enable end entry escape exception exception_init exchange exclusive exists exit external fast fetch file for force form from function generic goto grant group having identified if immediate in increment index indexes indicator initial initrans insert interface intersect into is key level library like limited local lock log logging long loop master maxextents maxtrans member minextents minus mislabel mode modify multiset new next no noaudit nocompress nologging noparallel not nowait number_base object of off offline on online only open option or order out package parallel partition pctfree pctincrease pctused pls_integer positive positiven pragma primary prior private privileges procedure public raise range raw read rebuild record ref references refresh release rename replace resource restrict return returning returns reverse revoke rollback row rowid rowlabel rownum rows run savepoint schema segment select separate session set share snapshot some space split sql start statement storage subtype successful synonym tabauth table tables tablespace task terminate then to trigger truncate type union unique unlimited unrecoverable unusable update use using validate value values variable view views when whenever where while with work&quot;),</td>
      </tr>
      <tr>
        <td id="L382" class="blob-num js-line-number" data-line-number="382"></td>
        <td id="LC382" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span>    <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>abs acos add_months ascii asin atan atan2 average bfile bfilename bigserial bit blob ceil character chartorowid chr clob concat convert cos cosh count dec decode deref dual dump dup_val_on_index empty error exp false float floor found glb greatest hextoraw initcap instr instrb int integer isopen last_day least length lengthb ln lower lpad ltrim lub make_ref max min mlslabel mod months_between natural naturaln nchar nclob new_time next_day nextval nls_charset_decl_len nls_charset_id nls_charset_name nls_initcap nls_lower nls_sort nls_upper nlssort no_data_found notfound null number numeric nvarchar2 nvl others power rawtohex real reftohex round rowcount rowidtochar rowtype rpad rtrim serial sign signtype sin sinh smallint soundex sqlcode sqlerrm sqrt stddev string substr substrb sum sysdate tan tanh to_char text to_date to_label to_multi_byte to_number to_single_byte translate true trunc uid unlogged upper user userenv varchar varchar2 variance varying vsize xml<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L383" class="blob-num js-line-number" data-line-number="383"></td>
        <td id="LC383" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=~]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L384" class="blob-num js-line-number" data-line-number="384"></td>
        <td id="LC384" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span>    <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L385" class="blob-num js-line-number" data-line-number="385"></td>
        <td id="LC385" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span>    <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>doubleQuote nCharCast zerolessFloat binaryNumber hexNumber<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L386" class="blob-num js-line-number" data-line-number="386"></td>
        <td id="LC386" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L387" class="blob-num js-line-number" data-line-number="387"></td>
        <td id="LC387" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L388" class="blob-num js-line-number" data-line-number="388"></td>
        <td id="LC388" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> Created to support specific hive keywords</span></td>
      </tr>
      <tr>
        <td id="L389" class="blob-num js-line-number" data-line-number="389"></td>
        <td id="LC389" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-hive<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L390" class="blob-num js-line-number" data-line-number="390"></td>
        <td id="LC390" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L391" class="blob-num js-line-number" data-line-number="391"></td>
        <td id="LC391" class="blob-code blob-code-inner js-file-line">    keywords: set(&quot;select alter $elem$ $key$ $value$ add after all analyze and archive as asc before between binary both bucket buckets by cascade case cast change cluster clustered clusterstatus collection column columns comment compute concatenate continue create cross cursor data database databases dbproperties deferred delete delimited desc describe directory disable distinct distribute drop else enable end escaped exclusive exists explain export extended external false fetch fields fileformat first format formatted from full function functions grant group having hold_ddltime idxproperties if import in index indexes inpath inputdriver inputformat insert intersect into is items join keys lateral left like limit lines load local location lock locks mapjoin materialized minus msck no_drop nocompress not of offline on option or order out outer outputdriver outputformat overwrite partition partitioned partitions percent plus preserve procedure purge range rcfile read readonly reads rebuild recordreader recordwriter recover reduce regexp rename repair replace restrict revoke right rlike row schema schemas semi sequencefile serde serdeproperties set shared show show_database sort sorted ssl statistics stored streamtable table tables tablesample tblproperties temporary terminated textfile then tmp to touch transform trigger true unarchive undo union uniquejoin unlock update use using utc utc_tmestamp view when where while with&quot;),</td>
      </tr>
      <tr>
        <td id="L392" class="blob-num js-line-number" data-line-number="392"></td>
        <td id="LC392" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bool boolean long timestamp tinyint smallint bigint int float double date datetime unsigned string array struct map uniontype<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L393" class="blob-num js-line-number" data-line-number="393"></td>
        <td id="LC393" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null unknown<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L394" class="blob-num js-line-number" data-line-number="394"></td>
        <td id="LC394" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L395" class="blob-num js-line-number" data-line-number="395"></td>
        <td id="LC395" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L396" class="blob-num js-line-number" data-line-number="396"></td>
        <td id="LC396" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ODBCdotTable doubleQuote binaryNumber hexNumber<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L397" class="blob-num js-line-number" data-line-number="397"></td>
        <td id="LC397" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L398" class="blob-num js-line-number" data-line-number="398"></td>
        <td id="LC398" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L399" class="blob-num js-line-number" data-line-number="399"></td>
        <td id="LC399" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-pgsql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L400" class="blob-num js-line-number" data-line-number="400"></td>
        <td id="LC400" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L401" class="blob-num js-line-number" data-line-number="401"></td>
        <td id="LC401" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>source<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L402" class="blob-num js-line-number" data-line-number="402"></td>
        <td id="LC402" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> https://www.postgresql.org/docs/10/static/sql-keywords-appendix.html</span></td>
      </tr>
      <tr>
        <td id="L403" class="blob-num js-line-number" data-line-number="403"></td>
        <td id="LC403" class="blob-code blob-code-inner js-file-line">    keywords: set(sqlKeywords + &quot;a abort abs absent absolute access according action ada add admin after aggregate all allocate also always analyse analyze any are array array_agg array_max_cardinality asensitive assertion assignment asymmetric at atomic attribute attributes authorization avg backward base64 before begin begin_frame begin_partition bernoulli binary bit_length blob blocked bom both breadth c cache call called cardinality cascade cascaded case cast catalog catalog_name ceil ceiling chain characteristics characters character_length character_set_catalog character_set_name character_set_schema char_length check checkpoint class class_origin clob close cluster coalesce cobol collate collation collation_catalog collation_name collation_schema collect column columns column_name command_function command_function_code comment comments commit committed concurrently condition condition_number configuration conflict connect connection connection_name constraint constraints constraint_catalog constraint_name constraint_schema constructor contains content continue control conversion convert copy corr corresponding cost covar_pop covar_samp cross csv cube cume_dist current current_catalog current_date current_default_transform_group current_path current_role current_row current_schema current_time current_timestamp current_transform_group_for_type current_user cursor cursor_name cycle data database datalink datetime_interval_code datetime_interval_precision day db deallocate dec declare default defaults deferrable deferred defined definer degree delimiter delimiters dense_rank depth deref derived describe descriptor deterministic diagnostics dictionary disable discard disconnect dispatch dlnewcopy dlpreviouscopy dlurlcomplete dlurlcompleteonly dlurlcompletewrite dlurlpath dlurlpathonly dlurlpathwrite dlurlscheme dlurlserver dlvalue do document domain dynamic dynamic_function dynamic_function_code each element else empty enable encoding encrypted end end-exec end_frame end_partition enforced enum equals escape event every except exception exclude excluding exclusive exec execute exists exp explain expression extension external extract false family fetch file filter final first first_value flag float floor following for force foreign fortran forward found frame_row free freeze fs full function functions fusion g general generated get global go goto grant granted greatest grouping groups handler header hex hierarchy hold hour id identity if ignore ilike immediate immediately immutable implementation implicit import including increment indent index indexes indicator inherit inherits initially inline inner inout input insensitive instance instantiable instead integrity intersect intersection invoker isnull isolation k key key_member key_type label lag language large last last_value lateral lc_collate lc_ctype lead leading leakproof least left length level library like_regex link listen ln load local localtime localtimestamp location locator lock locked logged lower m map mapping match matched materialized max maxvalue max_cardinality member merge message_length message_octet_length message_text method min minute minvalue mod mode modifies module month more move multiset mumps name names namespace national natural nchar nclob nesting new next nfc nfd nfkc nfkd nil no none normalize normalized nothing notify notnull nowait nth_value ntile null nullable nullif nulls number object occurrences_regex octets octet_length of off offset oids old only open operator option options ordering ordinality others out outer output over overlaps overlay overriding owned owner p pad parallel parameter parameter_mode parameter_name parameter_ordinal_position parameter_specific_catalog parameter_specific_name parameter_specific_schema parser partial partition pascal passing passthrough password percent percentile_cont percentile_disc percent_rank period permission placing plans pli policy portion position position_regex power precedes preceding prepare prepared preserve primary prior privileges procedural procedure program public quote range rank read reads reassign recheck recovery recursive ref references referencing refresh regr_avgx regr_avgy regr_count regr_intercept regr_r2 regr_slope regr_sxx regr_sxy regr_syy reindex relative release rename repeatable replace replica requiring reset respect restart restore restrict restricted result return returned_cardinality returned_length returned_octet_length returned_sqlstate returning returns revoke right role rollback rollup routine routine_catalog routine_name routine_schema row rows row_count row_number rule savepoint scale schema schema_name scope scope_catalog scope_name scope_schema scroll search second section security selective self sensitive sequence sequences serializable server server_name session session_user setof sets share show similar simple size skip snapshot some source space specific specifictype specific_name sql sqlcode sqlerror sqlexception sqlstate sqlwarning sqrt stable standalone start state statement static statistics stddev_pop stddev_samp stdin stdout storage strict strip structure style subclass_origin submultiset substring substring_regex succeeds sum symmetric sysid system system_time system_user t tables tablesample tablespace table_name temp template temporary then ties timezone_hour timezone_minute to token top_level_count trailing transaction transactions_committed transactions_rolled_back transaction_active transform transforms translate translate_regex translation treat trigger trigger_catalog trigger_name trigger_schema trim trim_array true truncate trusted type types uescape unbounded uncommitted under unencrypted unique unknown unlink unlisten unlogged unnamed unnest until untyped upper uri usage user user_defined_type_catalog user_defined_type_code user_defined_type_name user_defined_type_schema using vacuum valid validate validator value value_of varbinary variadic var_pop var_samp verbose version versioning view views volatile when whenever whitespace width_bucket window within work wrapper write xmlagg xmlattributes xmlbinary xmlcast xmlcomment xmlconcat xmldeclaration xmldocument xmlelement xmlexists xmlforest xmliterate xmlnamespaces xmlparse xmlpi xmlquery xmlroot xmlschema xmlserialize xmltable xmltext xmlvalidate year yes loop repeat attach path depends detach zone&quot;),</td>
      </tr>
      <tr>
        <td id="L404" class="blob-num js-line-number" data-line-number="404"></td>
        <td id="LC404" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> https://www.postgresql.org/docs/10/static/datatype.html</span></td>
      </tr>
      <tr>
        <td id="L405" class="blob-num js-line-number" data-line-number="405"></td>
        <td id="LC405" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bigint int8 bigserial serial8 bit varying varbit boolean bool box bytea character char varchar cidr circle date double precision float8 inet integer int int4 interval json jsonb line lseg macaddr macaddr8 money numeric decimal path pg_lsn point polygon real float4 smallint int2 smallserial serial2 serial serial4 text time without zone with timetz timestamp timestamptz tsquery tsvector txid_snapshot uuid xml<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L406" class="blob-num js-line-number" data-line-number="406"></td>
        <td id="LC406" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null unknown<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L407" class="blob-num js-line-number" data-line-number="407"></td>
        <td id="LC407" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=&amp;|^<span class="pl-cce">\/</span>#@?~]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L408" class="blob-num js-line-number" data-line-number="408"></td>
        <td id="LC408" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L409" class="blob-num js-line-number" data-line-number="409"></td>
        <td id="LC409" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ODBCdotTable decimallessFloat zerolessFloat binaryNumber hexNumber nCharCast charsetCast<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L410" class="blob-num js-line-number" data-line-number="410"></td>
        <td id="LC410" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L411" class="blob-num js-line-number" data-line-number="411"></td>
        <td id="LC411" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L412" class="blob-num js-line-number" data-line-number="412"></td>
        <td id="LC412" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> Google&#39;s SQL-like query language, GQL</span></td>
      </tr>
      <tr>
        <td id="L413" class="blob-num js-line-number" data-line-number="413"></td>
        <td id="LC413" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-gql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L414" class="blob-num js-line-number" data-line-number="414"></td>
        <td id="LC414" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L415" class="blob-num js-line-number" data-line-number="415"></td>
        <td id="LC415" class="blob-code blob-code-inner js-file-line">    keywords<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ancestor and asc by contains desc descendant distinct from group has in is limit offset on order select superset where<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L416" class="blob-num js-line-number" data-line-number="416"></td>
        <td id="LC416" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L417" class="blob-num js-line-number" data-line-number="417"></td>
        <td id="LC417" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>blob datetime first key __key__ string integer double boolean null<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L418" class="blob-num js-line-number" data-line-number="418"></td>
        <td id="LC418" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=]</span><span class="pl-pds">/</span></span></td>
      </tr>
      <tr>
        <td id="L419" class="blob-num js-line-number" data-line-number="419"></td>
        <td id="LC419" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L420" class="blob-num js-line-number" data-line-number="420"></td>
        <td id="LC420" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L421" class="blob-num js-line-number" data-line-number="421"></td>
        <td id="LC421" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> Greenplum</span></td>
      </tr>
      <tr>
        <td id="L422" class="blob-num js-line-number" data-line-number="422"></td>
        <td id="LC422" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-gpsql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L423" class="blob-num js-line-number" data-line-number="423"></td>
        <td id="LC423" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L424" class="blob-num js-line-number" data-line-number="424"></td>
        <td id="LC424" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>source<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L425" class="blob-num js-line-number" data-line-number="425"></td>
        <td id="LC425" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span>https://github.com/greenplum-db/gpdb/blob/master/src/include/parser/kwlist.h</span></td>
      </tr>
      <tr>
        <td id="L426" class="blob-num js-line-number" data-line-number="426"></td>
        <td id="LC426" class="blob-code blob-code-inner js-file-line">    keywords: set(&quot;abort absolute access action active add admin after aggregate all also alter always analyse analyze and any array as asc assertion assignment asymmetric at authorization backward before begin between bigint binary bit boolean both by cache called cascade cascaded case cast chain char character characteristics check checkpoint class close cluster coalesce codegen collate column comment commit committed concurrency concurrently configuration connection constraint constraints contains content continue conversion copy cost cpu_rate_limit create createdb createexttable createrole createuser cross csv cube current current_catalog current_date current_role current_schema current_time current_timestamp current_user cursor cycle data database day deallocate dec decimal declare decode default defaults deferrable deferred definer delete delimiter delimiters deny desc dictionary disable discard distinct distributed do document domain double drop dxl each else enable encoding encrypted end enum errors escape every except exchange exclude excluding exclusive execute exists explain extension external extract false family fetch fields filespace fill filter first float following for force foreign format forward freeze from full function global grant granted greatest group group_id grouping handler hash having header hold host hour identity if ignore ilike immediate immutable implicit in including inclusive increment index indexes inherit inherits initially inline inner inout input insensitive insert instead int integer intersect interval into invoker is isnull isolation join key language large last leading least left level like limit list listen load local localtime localtimestamp location lock log login mapping master match maxvalue median merge minute minvalue missing mode modifies modify month move name names national natural nchar new newline next no nocreatedb nocreateexttable nocreaterole nocreateuser noinherit nologin none noovercommit nosuperuser not nothing notify notnull nowait null nullif nulls numeric object of off offset oids old on only operator option options or order ordered others out outer over overcommit overlaps overlay owned owner parser partial partition partitions passing password percent percentile_cont percentile_disc placing plans position preceding precision prepare prepared preserve primary prior privileges procedural procedure protocol queue quote randomly range read readable reads real reassign recheck recursive ref references reindex reject relative release rename repeatable replace replica reset resource restart restrict returning returns revoke right role rollback rollup rootpartition row rows rule savepoint scatter schema scroll search second security segment select sequence serializable session session_user set setof sets share show similar simple smallint some split sql stable standalone start statement statistics stdin stdout storage strict strip subpartition subpartitions substring superuser symmetric sysid system table tablespace temp template temporary text then threshold ties time timestamp to trailing transaction treat trigger trim true truncate trusted type unbounded uncommitted unencrypted union unique unknown unlisten until update user using vacuum valid validation validator value values varchar variadic varying verbose version view volatile web when where whitespace window with within without work writable write xml xmlattributes xmlconcat xmlelement xmlexists xmlforest xmlparse xmlpi xmlroot xmlserialize year yes zone&quot;),</td>
      </tr>
      <tr>
        <td id="L427" class="blob-num js-line-number" data-line-number="427"></td>
        <td id="LC427" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>bigint int8 bigserial serial8 bit varying varbit boolean bool box bytea character char varchar cidr circle date double precision float float8 inet integer int int4 interval json jsonb line lseg macaddr macaddr8 money numeric decimal path pg_lsn point polygon real float4 smallint int2 smallserial serial2 serial serial4 text time without zone with timetz timestamp timestamptz tsquery tsvector txid_snapshot uuid xml<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L428" class="blob-num js-line-number" data-line-number="428"></td>
        <td id="LC428" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null unknown<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L429" class="blob-num js-line-number" data-line-number="429"></td>
        <td id="LC429" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=&amp;|^<span class="pl-cce">\/</span>#@?~]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L430" class="blob-num js-line-number" data-line-number="430"></td>
        <td id="LC430" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L431" class="blob-num js-line-number" data-line-number="431"></td>
        <td id="LC431" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ODBCdotTable decimallessFloat zerolessFloat binaryNumber hexNumber nCharCast charsetCast<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L432" class="blob-num js-line-number" data-line-number="432"></td>
        <td id="LC432" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L433" class="blob-num js-line-number" data-line-number="433"></td>
        <td id="LC433" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L434" class="blob-num js-line-number" data-line-number="434"></td>
        <td id="LC434" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> Spark SQL</span></td>
      </tr>
      <tr>
        <td id="L435" class="blob-num js-line-number" data-line-number="435"></td>
        <td id="LC435" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-sparksql<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L436" class="blob-num js-line-number" data-line-number="436"></td>
        <td id="LC436" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L437" class="blob-num js-line-number" data-line-number="437"></td>
        <td id="LC437" class="blob-code blob-code-inner js-file-line">    keywords: set(&quot;add after all alter analyze and anti archive array as asc at between bucket buckets by cache cascade case cast change clear cluster clustered codegen collection column columns comment commit compact compactions compute concatenate cost create cross cube current current_date current_timestamp database databases datata dbproperties defined delete delimited desc describe dfs directories distinct distribute drop else end escaped except exchange exists explain export extended external false fields fileformat first following for format formatted from full function functions global grant group grouping having if ignore import in index indexes inner inpath inputformat insert intersect interval into is items join keys last lateral lazy left like limit lines list load local location lock locks logical macro map minus msck natural no not null nulls of on option options or order out outer outputformat over overwrite partition partitioned partitions percent preceding principals purge range recordreader recordwriter recover reduce refresh regexp rename repair replace reset restrict revoke right rlike role roles rollback rollup row rows schema schemas select semi separated serde serdeproperties set sets show skewed sort sorted start statistics stored stratify struct table tables tablesample tblproperties temp temporary terminated then to touch transaction transactions transform true truncate unarchive unbounded uncache union unlock unset use using values view when where window with&quot;),</td>
      </tr>
      <tr>
        <td id="L438" class="blob-num js-line-number" data-line-number="438"></td>
        <td id="LC438" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>tinyint smallint int bigint boolean float double string binary timestamp decimal array map struct uniontype delimited serde sequencefile textfile rcfile inputformat outputformat<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L439" class="blob-num js-line-number" data-line-number="439"></td>
        <td id="LC439" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L440" class="blob-num js-line-number" data-line-number="440"></td>
        <td id="LC440" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=~&amp;|^]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L441" class="blob-num js-line-number" data-line-number="441"></td>
        <td id="LC441" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>date time timestamp<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L442" class="blob-num js-line-number" data-line-number="442"></td>
        <td id="LC442" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>ODBCdotTable doubleQuote zerolessFloat<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L443" class="blob-num js-line-number" data-line-number="443"></td>
        <td id="LC443" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L444" class="blob-num js-line-number" data-line-number="444"></td>
        <td id="LC444" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L445" class="blob-num js-line-number" data-line-number="445"></td>
        <td id="LC445" class="blob-code blob-code-inner js-file-line">  <span class="pl-c"><span class="pl-c">//</span> Esper</span></td>
      </tr>
      <tr>
        <td id="L446" class="blob-num js-line-number" data-line-number="446"></td>
        <td id="LC446" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">CodeMirror</span>.<span class="pl-en">defineMIME</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>text/x-esper<span class="pl-pds">&quot;</span></span>, {</td>
      </tr>
      <tr>
        <td id="L447" class="blob-num js-line-number" data-line-number="447"></td>
        <td id="LC447" class="blob-code blob-code-inner js-file-line">    name<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">&quot;</span>sql<span class="pl-pds">&quot;</span></span>,</td>
      </tr>
      <tr>
        <td id="L448" class="blob-num js-line-number" data-line-number="448"></td>
        <td id="LC448" class="blob-code blob-code-inner js-file-line">    client<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>source<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L449" class="blob-num js-line-number" data-line-number="449"></td>
        <td id="LC449" class="blob-code blob-code-inner js-file-line">    <span class="pl-c"><span class="pl-c">//</span> http://www.espertech.com/esper/release-5.5.0/esper-reference/html/appendix_keywords.html</span></td>
      </tr>
      <tr>
        <td id="L450" class="blob-num js-line-number" data-line-number="450"></td>
        <td id="LC450" class="blob-code blob-code-inner js-file-line">    keywords<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>alter and as asc between by count create delete desc distinct drop from group having in insert into is join like not on or order select set table union update values where limit after all and as at asc avedev avg between by case cast coalesce count create current_timestamp day days delete define desc distinct else end escape events every exists false first from full group having hour hours in inner insert instanceof into irstream is istream join last lastweekday left limit like max match_recognize matches median measures metadatasql min minute minutes msec millisecond milliseconds not null offset on or order outer output partition pattern prev prior regexp retain-union retain-intersection right rstream sec second seconds select set some snapshot sql stddev sum then true unidirectional until update variable weekday when where window<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L451" class="blob-num js-line-number" data-line-number="451"></td>
        <td id="LC451" class="blob-code blob-code-inner js-file-line">    builtin<span class="pl-k">:</span> {},</td>
      </tr>
      <tr>
        <td id="L452" class="blob-num js-line-number" data-line-number="452"></td>
        <td id="LC452" class="blob-code blob-code-inner js-file-line">    atoms<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>false true null<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L453" class="blob-num js-line-number" data-line-number="453"></td>
        <td id="LC453" class="blob-code blob-code-inner js-file-line">    operatorChars<span class="pl-k">:</span><span class="pl-sr"> <span class="pl-pds">/</span><span class="pl-k">^</span><span class="pl-c1">[*+<span class="pl-c1">\-%</span>&lt;&gt;!=&amp;|^<span class="pl-cce">\/</span>#@?~]</span><span class="pl-pds">/</span></span>,</td>
      </tr>
      <tr>
        <td id="L454" class="blob-num js-line-number" data-line-number="454"></td>
        <td id="LC454" class="blob-code blob-code-inner js-file-line">    dateSQL<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>time<span class="pl-pds">&quot;</span></span>),</td>
      </tr>
      <tr>
        <td id="L455" class="blob-num js-line-number" data-line-number="455"></td>
        <td id="LC455" class="blob-code blob-code-inner js-file-line">    support<span class="pl-k">:</span> <span class="pl-en">set</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>decimallessFloat zerolessFloat binaryNumber hexNumber<span class="pl-pds">&quot;</span></span>)</td>
      </tr>
      <tr>
        <td id="L456" class="blob-num js-line-number" data-line-number="456"></td>
        <td id="LC456" class="blob-code blob-code-inner js-file-line">  });</td>
      </tr>
      <tr>
        <td id="L457" class="blob-num js-line-number" data-line-number="457"></td>
        <td id="LC457" class="blob-code blob-code-inner js-file-line">}());</td>
      </tr>
      <tr>
        <td id="L458" class="blob-num js-line-number" data-line-number="458"></td>
        <td id="LC458" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L459" class="blob-num js-line-number" data-line-number="459"></td>
        <td id="LC459" class="blob-code blob-code-inner js-file-line">});</td>
      </tr>
      <tr>
        <td id="L460" class="blob-num js-line-number" data-line-number="460"></td>
        <td id="LC460" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="L461" class="blob-num js-line-number" data-line-number="461"></td>
        <td id="LC461" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">/*</span></span></td>
      </tr>
      <tr>
        <td id="L462" class="blob-num js-line-number" data-line-number="462"></td>
        <td id="LC462" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  How Properties of Mime Types are used by SQL Mode</span></td>
      </tr>
      <tr>
        <td id="L463" class="blob-num js-line-number" data-line-number="463"></td>
        <td id="LC463" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  =================================================</span></td>
      </tr>
      <tr>
        <td id="L464" class="blob-num js-line-number" data-line-number="464"></td>
        <td id="LC464" class="blob-code blob-code-inner js-file-line"><span class="pl-c"></span></td>
      </tr>
      <tr>
        <td id="L465" class="blob-num js-line-number" data-line-number="465"></td>
        <td id="LC465" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  keywords:</span></td>
      </tr>
      <tr>
        <td id="L466" class="blob-num js-line-number" data-line-number="466"></td>
        <td id="LC466" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    A list of keywords you want to be highlighted.</span></td>
      </tr>
      <tr>
        <td id="L467" class="blob-num js-line-number" data-line-number="467"></td>
        <td id="LC467" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  builtin:</span></td>
      </tr>
      <tr>
        <td id="L468" class="blob-num js-line-number" data-line-number="468"></td>
        <td id="LC468" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    A list of builtin types you want to be highlighted (if you want types to be of class &quot;builtin&quot; instead of &quot;keyword&quot;).</span></td>
      </tr>
      <tr>
        <td id="L469" class="blob-num js-line-number" data-line-number="469"></td>
        <td id="LC469" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  operatorChars:</span></td>
      </tr>
      <tr>
        <td id="L470" class="blob-num js-line-number" data-line-number="470"></td>
        <td id="LC470" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    All characters that must be handled as operators.</span></td>
      </tr>
      <tr>
        <td id="L471" class="blob-num js-line-number" data-line-number="471"></td>
        <td id="LC471" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  client:</span></td>
      </tr>
      <tr>
        <td id="L472" class="blob-num js-line-number" data-line-number="472"></td>
        <td id="LC472" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    Commands parsed and executed by the client (not the server).</span></td>
      </tr>
      <tr>
        <td id="L473" class="blob-num js-line-number" data-line-number="473"></td>
        <td id="LC473" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  support:</span></td>
      </tr>
      <tr>
        <td id="L474" class="blob-num js-line-number" data-line-number="474"></td>
        <td id="LC474" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    A list of supported syntaxes which are not common, but are supported by more than 1 DBMS.</span></td>
      </tr>
      <tr>
        <td id="L475" class="blob-num js-line-number" data-line-number="475"></td>
        <td id="LC475" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * ODBCdotTable: .tableName</span></td>
      </tr>
      <tr>
        <td id="L476" class="blob-num js-line-number" data-line-number="476"></td>
        <td id="LC476" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * zerolessFloat: .1</span></td>
      </tr>
      <tr>
        <td id="L477" class="blob-num js-line-number" data-line-number="477"></td>
        <td id="LC477" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * doubleQuote</span></td>
      </tr>
      <tr>
        <td id="L478" class="blob-num js-line-number" data-line-number="478"></td>
        <td id="LC478" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * nCharCast: N&#39;string&#39;</span></td>
      </tr>
      <tr>
        <td id="L479" class="blob-num js-line-number" data-line-number="479"></td>
        <td id="LC479" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * charsetCast: _utf8&#39;string&#39;</span></td>
      </tr>
      <tr>
        <td id="L480" class="blob-num js-line-number" data-line-number="480"></td>
        <td id="LC480" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * commentHash: use # char for comments</span></td>
      </tr>
      <tr>
        <td id="L481" class="blob-num js-line-number" data-line-number="481"></td>
        <td id="LC481" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * commentSlashSlash: use // for comments</span></td>
      </tr>
      <tr>
        <td id="L482" class="blob-num js-line-number" data-line-number="482"></td>
        <td id="LC482" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    * commentSpaceRequired: require a space after -- for comments</span></td>
      </tr>
      <tr>
        <td id="L483" class="blob-num js-line-number" data-line-number="483"></td>
        <td id="LC483" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  atoms:</span></td>
      </tr>
      <tr>
        <td id="L484" class="blob-num js-line-number" data-line-number="484"></td>
        <td id="LC484" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    Keywords that must be highlighted as atoms,. Some DBMS&#39;s support more atoms than others:</span></td>
      </tr>
      <tr>
        <td id="L485" class="blob-num js-line-number" data-line-number="485"></td>
        <td id="LC485" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    UNKNOWN, INFINITY, UNDERFLOW, NaN...</span></td>
      </tr>
      <tr>
        <td id="L486" class="blob-num js-line-number" data-line-number="486"></td>
        <td id="LC486" class="blob-code blob-code-inner js-file-line"><span class="pl-c">  dateSQL:</span></td>
      </tr>
      <tr>
        <td id="L487" class="blob-num js-line-number" data-line-number="487"></td>
        <td id="LC487" class="blob-code blob-code-inner js-file-line"><span class="pl-c">    Used for date/time SQL standard syntax, because not all DBMS&#39;s support same temporal types.</span></td>
      </tr>
      <tr>
        <td id="L488" class="blob-num js-line-number" data-line-number="488"></td>
        <td id="LC488" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">*/</span></span></td>
      </tr>
</table>

  <div class="BlobToolbar position-absolute js-file-line-actions dropdown js-menu-container js-select-menu d-none" aria-hidden="true">
    <button class="btn-octicon ml-0 px-2 p-0 bg-white border border-gray-dark rounded-1 dropdown-toggle js-menu-target" id="js-file-line-action-button" type="button" aria-expanded="false" aria-haspopup="true" aria-label="Inline file action toolbar" aria-controls="inline-file-actions">
      <svg aria-hidden="true" class="octicon octicon-kebab-horizontal" height="16" version="1.1" viewBox="0 0 13 16" width="13"><path fill-rule="evenodd" d="M1.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>
    </button>
    <div class="dropdown-menu-content js-menu-content" id="inline-file-actions">
      <ul class="BlobToolbar-dropdown dropdown-menu dropdown-menu-se mt-2">
        <li><a class="js-zeroclipboard dropdown-item" style="cursor:pointer;" id="js-copy-lines" data-original-text="Copy lines">Copy lines</a></li>
        <li><a class="js-zeroclipboard dropdown-item" id= "js-copy-permalink" style="cursor:pointer;" data-original-text="Copy permalink">Copy permalink</a></li>
        <li><a href="/codemirror/CodeMirror/blame/d0dca6532dd668cf415b2740152b93d1cb454410/mode/sql/sql.js" class="dropdown-item js-update-url-with-hash" id="js-view-git-blame">View git blame</a></li>
          <li><a href="/codemirror/CodeMirror/issues/new" class="dropdown-item" id="js-new-issue">Open new issue</a></li>
      </ul>
    </div>
  </div>

  </div>

  </div>

  <button type="button" data-facebox="#jump-to-line" data-facebox-class="linejump" data-hotkey="l" class="d-none">Jump to Line</button>
  <div id="jump-to-line" style="display:none">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
      <input class="form-control linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
      <button type="submit" class="btn">Go</button>
</form>  </div>


  </div>
  <div class="modal-backdrop js-touch-events"></div>
</div>

    </div>
  </div>

  </div>

      
<div class="footer container-lg px-3" role="contentinfo">
  <div class="position-relative d-flex flex-justify-between py-6 mt-6 f6 text-gray border-top border-gray-light ">
    <ul class="list-style-none d-flex flex-wrap ">
      <li class="mr-3">&copy; 2018 <span title="0.20409s from unicorn-3415180956-5pjf5">GitHub</span>, Inc.</li>
        <li class="mr-3"><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="mr-3"><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="mr-3"><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li class="mr-3"><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>

    <a href="https://github.com" aria-label="Homepage" class="footer-octicon" title="GitHub">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>
    <ul class="list-style-none d-flex flex-wrap ">
        <li class="mr-3"><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
      <li class="mr-3"><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mr-3"><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li class="mr-3"><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li class="mr-3"><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
    You can't perform that action at this time.
  </div>


    
    <script crossorigin="anonymous" integrity="sha512-5eNCJxF6JRFBIlzpDhOCOCr061HNcJA5uzFU7PZ14+GkNvTUaLgS4Ai42IhsAU9E4G2B/u/a2s/6UsbTwUc5UA==" src="https://assets-cdn.github.com/assets/frameworks-e5e34227117a251141225ce90e1382382af4eb51cd709039bb3154ecf675e3e1a436f4d468b812e008b8d8886c014f44e06d81feefdadacffa52c6d3c1473950.js"></script>
    
    <script async="async" crossorigin="anonymous" integrity="sha512-ujnthk+VXh4l+2TsGqXK3Dy9/o2c5B9/dSPj0diaZQawh9eA0d8gD4MxHwtf/A0WcR6bOvxD99vZ3LHEFgYuRA==" src="https://assets-cdn.github.com/assets/github-ba39ed864f955e1e25fb64ec1aa5cadc3cbdfe8d9ce41f7f7523e3d1d89a6506b087d780d1df200f83311f0b5ffc0d16711e9b3afc43f7dbd9dcb1c416062e44.js"></script>
    
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
  </div>
</div>


  </body>
</html>

