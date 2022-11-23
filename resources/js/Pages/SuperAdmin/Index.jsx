import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';


export default function Dashboard(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard {props.auth.user.name}</h2>}
        >

        <Head title="SuperAdmin" />
            <div className='w-full bg-white'>
                <div className='flex flex-wrap justify-center'>
                    <div className='target'>
                        <DashCircle></DashCircle>
                    </div>
                    <DashCircle></DashCircle>
                    <DashCircle></DashCircle>
                </div>
                
                <div className='w-3/5 justify-center'>
                    <DashBar className=''></DashBar>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
