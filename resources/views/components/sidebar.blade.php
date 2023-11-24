<aside id="sidebar" class="sidebar collapse d-lg-block">
    <div class="main-logo">
        <a href="{{URL::tokenRoute('home')}}"> <img src="{{asset('images/main-logo.png')}}" alt="Octopus logo"></a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ URL::tokenRoute('home')}}">
                    <div class="nav-icon d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" fill="none">
                            <path fill="#fff" d="M13.386 5.725 7.761.418A1.125 1.125 0 0 0 6.24.41l-.007.008L.614 5.725a1.125 1.125 0 0 0-.364.829v6.5a1.125 1.125 0 0 0 1.125 1.125H4.75a1.125 1.125 0 0 0 1.125-1.125V9.679h2.25v3.375a1.125 1.125 0 0 0 1.125 1.125h3.375a1.125 1.125 0 0 0 1.125-1.125v-6.5a1.127 1.127 0 0 0-.364-.829Zm-.761 7.329H9.25V9.679a1.125 1.125 0 0 0-1.125-1.125h-2.25A1.125 1.125 0 0 0 4.75 9.679v3.375H1.375v-6.5l.008-.007L7 1.24l5.618 5.304.008.007-.001 6.502Z" />
                        </svg>
                    </div>
                    Dashboard
                </a>
            </li>
            <li class="{{ (request()->is('/faqs')) ? 'active' : '' }}">
                <a class="d-flex align-items-center dropdown-toggle" href="#" role="button" id="faqDropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="nav-icon d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="none">
                            <path fill="#fff" d="M9.844 13.085a.844.844 0 1 1-1.688 0 .844.844 0 0 1 1.688 0ZM9 5.491c-1.551 0-2.813 1.136-2.813 2.532v.281a.562.562 0 0 0 1.125 0v-.281c0-.774.758-1.407 1.688-1.407.93 0 1.688.633 1.688 1.407 0 .773-.758 1.406-1.688 1.406a.562.562 0 0 0-.563.562v.563a.563.563 0 0 0 1.126 0v-.05c1.282-.236 2.25-1.26 2.25-2.481C11.813 6.627 10.55 5.49 9 5.49Zm7.313 3.938A7.313 7.313 0 1 1 9 2.116a7.32 7.32 0 0 1 7.313 7.313Zm-1.125 0A6.187 6.187 0 1 0 9 15.617a6.195 6.195 0 0 0 6.188-6.188Z" />
                        </svg>
                    </div>
                    FAQ
                </a>
                <ul class="dropdown-menu" aria-labelledby="faqDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('faqs.index')}}">All list</a></li>
                    <li><a class="dropdown-item" href="{{ route('faqs.create')}}">Create</a></li>
                </ul>
            </li>

            <li>
                <a class="d-flex align-items-center dropdown-toggle" href="#" role="button" id="groupDropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="nav-icon d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="18" height="18" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                        </svg>
                    </div>
                    Group
                </a>
                <ul class="dropdown-menu" aria-labelledby="groupDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('groups.index')}}">All list</a></li>
                    <li><a class="dropdown-item" href="{{ route('groups.create') }}">Create</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
