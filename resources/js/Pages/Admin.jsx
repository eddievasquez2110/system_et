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
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Hola {props.auth.user.name}</h2>}
        >

        <Head title="Dashboard" />
              
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

        </AuthenticatedLayout>
    );
}
