import React, { useEffect,useState  } from 'react'
import { Link } from '@inertiajs/inertia-react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBell, faCircleLeft, faUser, faFilePen, faFileWord,faLaptop, faFileClipboard, faChartPie, faArrowRightFromBracket} from '@fortawesome/free-solid-svg-icons';
import Dropdown from '@/Components/Dropdown';
import { Inertia } from '@inertiajs/inertia';
import SideLink from '@/Components/SideLink';
import Swal from 'sweetalert2';


const Navbar = ({auth,children, total}) => {
    const [show,setShow] = useState(false);
    const [show1,setShow1] = useState(false);
    const [show2,setShow2] = useState(false);
    const [open,setOpen] =useState(true);
    
    useEffect(()=> {
        const data = window.localStorage.getItem('valueOpen');
        setOpen(JSON.parse(data));
    },[])
    
    useEffect(() => {
        window.localStorage.setItem('valueOpen',JSON.stringify(open))
    },[open])
    
    const styleOpen = {
        // display:"block"
        display:"flex"
    }
    const styleClose = {
        display:"none"
    }
    const alertLogout = (e) => {
        Swal.fire({
            title: 'Estas seguro?',
            text: "Usted saldra del sistema",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Salir'
          }).then((result) => { 
            if (result.isConfirmed) {
              Swal.fire(
                'Logout!',
                'Saliste del sistema.',
                'success'
              )
              Inertia.post(route('logout'));
            }
          })
    }
  return (
    <div className='flex justify-between relative '>
        <div className="shadow-md bg-green-800 sticky top-0 h-screen " style={open ?{width:'18%'}:{width:'75px'}}>
          <div className='relative '>
            <div className="pt-4 px-6">
                <a href="#">
                <div className="space-x-3 flex lg:flex-row min-[200px]:flex-col cursor-auto items-center pb-4 border-b border-gray-200">
                    <div className="shrink-0">
                    <img src={"/images/Logo/Logo.png"} style={open ?{width:'75px'}:{width:'35px'}} alt="" />
                    </div>
                    <div className="grow text-center" style={open ? styleOpen : styleClose} >
                    <p className="text-sm font-semibold text-white md:inline min-[200px]:hidden ">UNCP SISTEMA EETT</p>
                    </div>
                </div>
                </a>
                <br></br>
            </div>
            </div>
            <div onClick={() => setOpen(!open)} className='absolute w-10 h-10 text-lg text-white cursor-pointer top-2/4 -right-3 flex items-center justify-center rounded-full bg-green-800'>
                <FontAwesomeIcon className="h-5 w-10 "  icon={faCircleLeft} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
            </div>

            <div className="overflow-y-auto mt-3">
                <ul className="space-y-2 ">
                    <li className='px-3'>
                        <SideLink className='' href={route('admin')} active={route().current('admin')}>
                            <FontAwesomeIcon className="h-5 w-6 "  icon={faChartPie} />
                            <div style={open ? styleOpen : styleClose} className="flex-1 lg:ml-3 min-[200px]:ml-0 ">
                                <span className='md:inline min-[200px]:hidden break-words' >Dashboard</span>
                            </div>
                        </SideLink>
                    </li>
                    <li className='px-3'>
                        <SideLink href={route('d.solicituds')} active={route().current('d.solicituds')}>
                            <FontAwesomeIcon className="h-5 w-6 "  icon={faFilePen} />
                            <div style={open ? styleOpen : styleClose} className="flex-1 lg:ml-3 min-[200px]:ml-0">
                                <span className='md:inline min-[200px]:hidden lg:text-left min-[200px]:text-center' >Gestión de Solicitudes</span>
                            </div>
                            
                        </SideLink>
                    </li>
                    <li className='px-3 '>
                        <button href="#" onClick={()=>setShow2(!show2)} active={route().current('d.usuarios.index')} className="flex lg:flex-row min-[200px]:flex-col items-center justify-center w-full p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                            <FontAwesomeIcon className="h-5 w-6 "  icon={faUser} />
                            <div style={open ? styleOpen : styleClose}  className="flex-1 justify-between lg:ml-3 min-[200px]:ml-0">
                                <span className='md:inline min-[200px]:hidden lg:text-left min-[200px]:text-center' >Gestión de Usuarios</span>
                                {open && <svg  className="w-6 h-6" style={show2?{transform: 'rotate(180deg)',}:{transform: 'rotate(0deg)'}} fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path></svg>}
                            </div>
                            
                        </button>
                        { open ?(show2 && <ul  className="absolute w-48 bg-white rounded-lg mt-1 ">
                        <li>
                                <Link href={route('d.roles.index')} active={route().current('d.roles.index')} className="flex items-center p-2 pl-8 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Roles
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.oficinas.index')} active={route().current('d.oficinas.index')} className="flex items-center p-2 pl-8 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Oficinas
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.usuarios.index')} active={route().current('d.usuarios.index')} className="flex items-center p-2 pl-8 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Usuarios
                                </Link>
                            </li>
                            
                        </ul>) : (show2 && <ul  className="absolute z-20 w-36 mt-1 bg-white rounded-lg">
                        <li>
                                <Link href={route('d.roles.index')}  className="flex items-center p-2 px-5 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Roles
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.oficinas.index')}  className="flex items-center p-2 px-5 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Oficinas
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.usuarios.index')}  className="flex items-center p-2 px-5 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Usuarios
                                </Link>
                            </li>
                            
                        </ul>)}
                    </li>
                    <li className='px-3'>
                        <button href="#"
                            onClick={()=>setShow(!show)}
                            className="flex lg:flex-row min-[200px]:flex-col items-center justify-center w-full p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50  transition duration-300 ease-in-out" 
                        >
                            <FontAwesomeIcon className="h-5 w-6 "  icon={faLaptop} />
                            <div style={open ? styleOpen : styleClose}  className="flex-1 justify-between lg:ml-3 min-[200px]:ml-0">
                                <span className='md:inline min-[200px]:hidden lg:text-left min-[200px]:text-center'>Gestión de Equipos</span>
                                {open && <svg  className="w-6 h-6" style={show?{transform: 'rotate(180deg)',}:{transform: 'rotate(0deg)'}} fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path></svg>}
                            </div>
                            
                        </button>
                            {open ? (show  && <ul  className="bg-white absolute w-48 rounded-lg mt-1">
                                <li>
                                    <Link href={route('d.tipoequipos.index')}  className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                        Tipo de Equipo
                                    </Link>
                                </li>
                                <li>
                                    <Link href={route('d.usoequipos.index')}  className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                        Uso de Equipo
                                    </Link>
                                </li>
                                <li>
                                    <Link href={route('d.especificacionequipo.index')}  className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                        Especificacion Equipo
                                    </Link>
                                </li>
                            </ul>): (show  && <ul  className="bg-white z-30 w-36 absolute rounded-lg mt-1">
                                <li>
                                    <Link href={route('d.tipoequipos.index')}  className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                        Tipo de Equipo
                                    </Link>
                                </li>
                                <li>
                                    <Link href={route('d.usoequipos.index')}  className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                        Uso de Equipo
                                    </Link>
                                </li>
                                <li>
                                    <Link href={route('d.especificacionequipo.index')}  className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                        Especificacion Equipo
                                    </Link>
                                </li>
                            </ul>)}
                    </li>

                    <li className='px-3'>
                        <SideLink href={route('d.softwares.index')} active={route().current('d.softwares.index')}>
                            <FontAwesomeIcon className="h-5 w-6 "  icon={faFileWord} />
                            <div style={open ? styleOpen : styleClose} className="flex-1 lg:ml-3 min-[200px]:ml-0">
                                <span className='md:inline min-[200px]:hidden lg:text-left min-[200px]:text-center' >Gestión de Softwares</span>
                            </div>
                            
                        </SideLink>
                    </li>
                    </ul>
            </div>
        </div>
            <div className='bg-white' style={open ?{width:'82%'}:{width:'95%'}}>
                <div className='flex p-5 justify-between items-center h-14 border-b border-neutral-100 shadow-md'>
                    <div className='text-slate-400'>
                        Hola bienvenido al modo {auth.user.name}
                    </div>
                    <div className='flex flex-row gap-6'>
                        <div className='rounded-md px-2 font-bold text-slate-200 text-md '>
                            <span className="inline-flex rounded-md">
                                <Link href={route('notificaciones.index')}>
                                <button
                                    type="button"
                                    className="relative inline-flex px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-green-600 font-bold hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                >
                                    <FontAwesomeIcon className="h-5 w-10"  icon={faBell} />
                                    <span className='absolute -top-0 right-2 bg-yellow-300 py-0.3 px-[5px] box-content text-black rounded-full text-[8px] font-bold'>
                                        .
                                    </span>
                                
                                </button>
                                </Link>
                            </span>
                        </div>
                        
                        <div className='rounded-md px-2 font-bold text-slate-200 text-md border border-green-500'>
                        <Dropdown>
                            <Dropdown.Trigger>
                                <span className="inline-flex rounded-md">
                                                
                                    <button
                                        type="button"
                                        className="inline-flex px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-green-600 font-bold hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                    >
                                        <FontAwesomeIcon className="h-5 w-10"  icon={faUser} />{auth.user.name.toUpperCase()}

                                        <svg
                                            className="ml-2 -mr-0.5 h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fillRule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clipRule="evenodd"
                                            />
                                        </svg>
                                    </button>
                                </span>
                            </Dropdown.Trigger>
                            <Dropdown.Content>
                                
                                <Link onClick={alertLogout} as="button" className='block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-red-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                    Cerrar Sesión
                                </Link>
                            
                            </Dropdown.Content>
                        </Dropdown>
                        </div>
                    </div>
                </div>
                <div className='flex justify-center bg-slate-100 overflow-y-auto ' style={{height:'calc(100% - 112px)'}}>
                    <div className='w-5/6'>
                    {children}
                    </div>  
                </div>
                <div className=' h-14 flex items-center justify-center text-slate-400 border-t-2 border-neutral-100'>
                   <div>
                    Copyrigth © OGSIC 2022 
                   </div>
                </div>
            </div>
    </div>
  )
}

export default Navbar