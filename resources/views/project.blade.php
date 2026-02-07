@if($project->uzers->isEmpty())
        <p>Nenhum usuário associado a este projeto.</p>
    @else
        <strong><h1>ID: {{  $project->id }}    |    Projeto: {{ $project->name }}</h1></strong>
        <ul class="space-y-2">
            @foreach ($project->uzers as $uzer)
                <li class="text-gray-700">
                    <strong>{{ $uzer->name }}</strong> - {{ $uzer->email }}
                </li>
            @endforeach
        </ul>
    @endif
