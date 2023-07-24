<ul>
    <li>
        <a href="{{ route('home') }}"
            class="{{ Session('active') === 'home' ? 'text-blue-500' : 'text-blue-200' }}">Home</a>
        <a href="{{ route('about') }}"
            class="{{ Session('active') === 'about' ? 'text-blue-500' : 'text-blue-200' }}">About</a>
        <a href="{{ route('project') }}"
            class="{{ Session('active') === 'project' ? 'text-blue-500' : 'text-blue-200' }}">Project</a>
        <a href="{{ route('todos.index') }}"
            class="{{ Session('active') !== 'project' ? 'text-blue-500' : 'text-blue-200' }}">Todos</a>
    </li>
</ul>
