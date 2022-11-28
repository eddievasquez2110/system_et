import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';


export default function Usuarios(props) {

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Hola {props.auth.user.name}</h2>}
        >

        <Head title="Usuarios" />
            <div className='w-full bg-white'>
                <h1>Usuarios</h1>
            </div>
                
        </AuthenticatedLayout>
    );
}