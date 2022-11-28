import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import TableReporte from '@/Components/TableReporte';



export default function Reportes(props) {

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard {props.auth.user.name}</h2>}
        >

        <Head title="Reportes" />
        <div className='container mx-auto'>
            <TableReporte></TableReporte>
        </div>

                
        </AuthenticatedLayout>
    );
}