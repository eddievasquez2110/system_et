import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';

export default function Especificaciones(props) {

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard {props.auth.user.name}</h2>}
        >

        <Head title="Selección de Programas" />

       
            { 
                auth.user.ID_Rol == '1' ?
                <div>
                
                </div>
                : <></>
            } 

        </AuthenticatedLayout>
    );
}