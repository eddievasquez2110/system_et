import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';
import PrimaryButton from '@/Components/PrimaryButton';


export default function Admin(props) {

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard {props.auth.user.name}</h2>}
        >

        <Head title="Dashboard" />
            <div className='grid grid-cols-4 divide-x'>
                <div className='w-4/5 h-screen bg-green-400 px-10 py-10 space-y-5'>
                    <PrimaryButton>Gestión de Usuarios</PrimaryButton>
                    <PrimaryButton>Gestión de Solicitudes</PrimaryButton>
                    <PrimaryButton>Gestión de Software</PrimaryButton>
                    <PrimaryButton>Gestión de Equipos</PrimaryButton>
                    <PrimaryButton>Reporte</PrimaryButton>
                </div>
                
                <div>
                    <DashCircle></DashCircle>
                    <DashBar></DashBar>
                </div>
                <div>
                    <DashCircle></DashCircle>
                </div>
                <div>
                    <DashCircle></DashCircle>
                </div>
            </div> 
            

        </AuthenticatedLayout>
    );
}
