@extends('layouts.index')
<table class="table container mt-0">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Service</th>
            <th scope="col">Date</th>
            <th scope="col">Heure début</th>
            <th scope="col">Heure fin</th>
            <th scope="col">time</th>
            <th scope="col">Show</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($infos as $key => $info)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $info->nom}}</td>
                <td>{{ $info->service }}</td>
                <td>{{ $info->dob }}</td>
                <td>{{ $info->debut }}</td>
                <td>{{ $info->fin }}</td>
                <td>
                    <?php
                        $heure1 = new DateTime($info->debut);
                        $heure2 = new DateTime($info->fin);
        
                        $difference = $heure1->diff($heure2);
        
                        echo $difference->format('%H heures, %i minutes');
                    ?>
                </td>
                <td><button type="button" class="btn btn-success">Etat</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>